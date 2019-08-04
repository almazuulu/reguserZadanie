<?php
//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	$nameSession= $_SESSION['name'];

	if(isset($nameSession))

	{
	  mysqli_query($conDB,"SET NAMES utf8"); 
		$showResult=mysqli_query($conDB,"SELECT id,mail,uName,lastName,firstName,middleName,sexUser,countryUser FROM users");
		$row=mysqli_num_rows($showResult);
		$i=0;
		echo "<div class='container'>";
		echo "<h3>Добро пожаловать на страницу Администратора! </h3>";
		echo "Всего зарегестрированных пользователей: ".$row;
		echo "</br></br>";
		echo "<table class='table table-responsive table-striped table-bordered'>";
		echo "<tr align='center'>";
		echo "<th>Номер №</th>";
		echo "<th>E-mail</th>";
		echo "<th>Логин</th>";
		echo "<th>Фамилия</th>";
		echo "<th>Имя</th>";
		echo "<th>Отчество</th>";
		echo "<th>Пол</th>";
		echo "<th>Страна </th>";
		echo "<th>Действие</th>";
		echo "</tr>";

		while ($retrive=mysqli_fetch_array($showResult)) {
			$idUser=$retrive['id'];
			$mailUser=$retrive['mail'];
			$loginUser=$retrive['uName'];
			$lName=$retrive['lastName'];
			$fName=$retrive['firstName'];
			$mName=$retrive['middleName'];
			$userSex=$retrive['sexUser'];
			$userCountry=$retrive['countryUser'];

			echo "<tr align='center'>";
			echo "<th>".$i=$i+1;"</th>";
			echo "<th>$mailUser</th>";
			echo "<th>$loginUser</th>";
			echo "<th>$lName</th>";
			echo "<th>$fName</th>";
			echo "<th>$mName</th>";
			echo "<th>$userSex
			</br></br><a href='editSexAdmin.php?editSex=$idUser'><button class='btn btn-success'>Изменить/</br>Добавить Пол</button></a>
			</br><a href='deleteSexAdmin.php?delSex=$idUser'><button class='btn btn-danger'>Удалить Пол</button></a>
			</th>";
			echo "<th>$userCountry
			</br></br><a href='editCountryAdmin.php?editCountry=$idUser'><button class='btn btn-success'>Изменить/</br>Добавить Страну</button></a>
			</br><a href='deleteSexAdmin.php?delSex=$idUser'><button class='btn btn-danger'>Удалить Страну</button></a>
			</th>";
			
			echo "<th></br></br><a href='profilepageUser.php?upd=$idUser'><button class='btn btn-success'>Просмотр профиля</button></a>
			</br><a href='statusChange.php?upd=$idUser'><button class='btn btn-danger'>Смена статуса</button>
			</th>";
	}

	}
	else
	{
		header("location:adminlogin.php");
	}


?>