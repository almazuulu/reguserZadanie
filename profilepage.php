<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	include("includes/functions.php");
	

	if(logged_in())
	{
		header("location:loginpage.php");
	}

	else if(isset($_COOKIE['name']))
	{
		//echo "Вы зашли через cookies";

		$email= $_COOKIE['name'];
	mysqli_query($conDB,"SET NAMES utf8"); //Устанавливаем кирилицу, чтобы не было проблем с отображением
	$result= mysqli_query($conDB,"SELECT id,firstName,lastName FROM users WHERE mail='$email'");
	$showing= mysqli_fetch_array($result);
	//print_r($showing); //Для проверки
	$id=$showing['id'];
	$fName= $showing['firstName'];
	$lName=$showing['lastName'];
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
		<?php echo $email;  ?>
		<h2 align="center">Добро пожаловать <?php echo $fName." ".$lName ?> !</h2>
		<a href="exit.php"><button class="btn btn-outline-success" style="float:right;margin-top: 20px;">Выйти</button></a>
		<a href="passwordchange.php?id=<?php echo $id ?>"><button class="btn btn-outline-primary" style="float:left;margin-top: 20px;">Поменять пароль</button></a>
	</br></br>
	</div>

</body>
</html>
<?php
}
else
{
	$email=$_SESSION['mailUser'];
	//echo "Вы зашли через сессию";
	mysqli_query($conDB,"SET NAMES utf8"); //Устанавливаем кирилицу, чтобы не было проблем с отображением
	$result= mysqli_query($conDB,"SELECT id,firstName,lastName FROM users WHERE mail='$email'");
	$showing= mysqli_fetch_array($result);
	//print_r($showing); //Для проверки
	$id=$showing['id'];
	$fName= $showing['firstName'];
	$lName=$showing['lastName'];
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
		<?php echo $email;  ?>

		<h2 align="center">Добро пожаловать <?php echo $fName." ".$lName ?> !</h2>
		<a href="exit.php"><button class="btn btn-outline-success" style="float:right;margin-top: 20px;">Выйти</button></a>
		<a href="passwordchange.php?id=<?php echo $id ?>"><button class="btn btn-outline-primary" style="float:left;margin-top: 20px;">Поменять пароль</button></a>
	</div>

</body>
</html>
<?php
}
?>

