<?php
//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	$adminLog= $_SESSION['name'];
	$i=0;



	if(isset($adminLog))

	{
		mysqli_query($conDB,"SET NAMES utf8"); 
		$showResult=mysqli_query($conDB,"SELECT id,mail,uName,lastName,firstName,middleName,sexUser,countryUser FROM users");
		$row=mysqli_num_rows($showResult);

		echo "<div class='container'>";
		echo "<h3>Добро пожаловать на страницу Администратора! </h3>";
		echo "Всего зарегестрированных пользователей: ".$row;
		echo "</br></br>";
		echo "<table class='table table-responsive table-striped table-bordered'>";
		echo "<tr>";
		echo "<th>Номер №</th>";
		echo "<th>E-mail</th>";
		echo "<th>Логин</th>";
		echo "<th>Фамилия</th>";
		echo "<th>Имя</th>";
		echo "<th>Отчество</th>";
		echo "<th>Пол</th>";
		echo "<th>Страна </th>";
		echo "<th>Удалить</th>";
		echo "<th>Редактировать</th>";
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

			echo "<tr>";
			echo "<th>".$i=$i+1;"</th>";
			echo "<th>$mailUser</th>";
			echo "<th>$loginUser</th>";
			echo "<th>$lName</th>";
			echo "<th>$fName</th>";
			echo "<th>$mName</th>";
			echo "<th>$userSex</th>";
			echo "<th>$userCountry</th>";
			echo "<th><a href='deleteAdmin.php'><button class='btn btn-danger'>Danger</button></th>";
			echo "<th>$userCountry</th>";

		}

	}
	else
	{
		header("location:adminlogin.php");
	}


?>