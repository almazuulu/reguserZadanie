<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	$idUser=$_GET['upd'];
		//echo "Вы зашли через cookies";
	mysqli_query($conDB,"SET NAMES utf8"); //Устанавливаем кирилицу, чтобы не было проблем с отображением
	$result= mysqli_query($conDB,"SELECT id,mail,firstName,lastName,middleName,sexUser,countryUser,registrDate FROM users WHERE id='$idUser'");
	$showing= mysqli_fetch_array($result);
	//print_r($showing); //Для проверки
	$id=$showing['id'];
	$mailUser=$showing['mail'];
	$fName= $showing['firstName'];
	$lName=$showing['lastName'];
	$mName=$showing['middleName'];
	$userSex=$showing['sexUser'];
	$userCountry=$showing['countryUser'];
	$dateRegist=$showing['registrDate'];
    //echo "Вы только что зашли на сайт!";
?>
<title>Профиль страницы</title>
<style type="text/css">
	#body-bg
	{
		background-color: #efefef
	}

</style>

</head>
<body id="body-bg">
	<div class="container" style="background-color: #fff; margin-top: 20px; margin-bottom: 20px;width: 1200px;height: 600px;">
		<a href="exit.php"><button class="btn btn-outline-success" style="float:right;margin-top: 20px;">Выйти</button></a>
		<a href="passwordchange.php?id=<?php echo $idUser ?>"><button class="btn btn-outline-primary" style="float:left;margin-top: 20px;">Поменять пароль</button></a>
	</br></br>
	<center>
		<h2 align="center">Добро пожаловать <?php echo $fName." ".$lName ?> !</h2>
		</br></br></br></br>
		<h4><b style="color: blue;">Почта: </b><i>&nbsp;<?php echo $mailUser ?></i></h4>
		<h4><b style="color: blue;">ФИО: </b><i>&nbsp;<?php echo $lName." ".$fName." " .$mName ?></i></h4>
		<h4><b style="color: blue;">Пол: </b><i>&nbsp;<?php echo $userSex ?></i></h4>
		<h4><b style="color: blue;">Страна: </b><i>&nbsp;<?php echo $userCountry ?></i></h4>
		<h4><b style="color: blue;">Дата регистрации: </b><i>&nbsp;<?php echo $dateRegist ?></i></h4>
	</center>
	</div>

</body>
</html>


