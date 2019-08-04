 <?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	include("includes/functions.php");
	$idUser=$_GET['id'];
	if(isset($idUser))
	{
	$message="";
	$message1="";
	$message2="";
	$message3="";	

	$password=""; $passwordnew="";
	
	if(isset($_POST['submit']))
	{
	
		$password = $_POST['passwordChange'];
		$passwordnew = $_POST['newPassword'];
		$passwordold= $_POST['oldPassword'];

		$passwordold=md5($passwordold);

		mysqli_query($conDB,"SET NAMES utf8"); //Устанавливаем кирилицу, чтобы не было проблем с отображением
		$result= mysqli_query($conDB,"SELECT password FROM users WHERE id='$idUser'");
		$showing= mysqli_fetch_array($result);
		
		$dbPassword=$showing['password']; //получение старого пароля из базы данных
	
	//сравниваем старый пароль с тем что ввел пользователь
	if($dbPassword!=$passwordold)
	{
		$message3="<div class='error'>Не правильный пароль!</div>";
	}

	else
	{
		if(strlen($password)<6)
		{	
			$message1="<div class='error'>Пароль должен состоять как минимум из 6 символов!</div>";
		}

		else if($password!=$passwordnew)
		{
			$message= '<div class="error">Пароли не совпадают!</div>';
		}

		else
		{
			$password=md5($password);
			mysqli_query($conDB,"UPDATE users SET password='$password' WHERE id='$idUser'");
			$message2= "<div class='success'>Пароль успешно изменен!</div>";
		}
	}
	
	}
?>
<title>Профиль страницы</title>
<style type="text/css">
	#body-bg
	{
		background-color: #efefef
	}

	.success
	{
		font-weight: bold;
		color:green;
	}
	.error
	{
		color: red;
	}

	.boxchangepass
	{
		border:1px solid gray;
		padding: 20px;
		border-radius:5px;
		box-shadow: 3px 3px 3px gray;
		background-color: lightblue;
	}

</style>

</head>
<body id="body-bg">
	<div class="container" style="padding-top: 50px; background-color: #fff; margin-top: 20px; margin-bottom: 20px;width: 1100px;height: 500px;">
	<a href="profilepage.php"><button class="btn btn-outline-danger" style=" float:left;margin-top: 10px;">Назад</button></a>
	<div class="col-md-4 offset-md-4">
	<div class="boxchangepass">
	<h2 align="center" style="color: green;"> Поменять пароль </h2>
	<?php echo $message2 ?>
</br>
		<form method="post">
  				
				<!--Ввод старого пароля-->
  				<div class="form-group">
  					<label><i>Введите старый пароль :</i></label>
  					<input type="password" name="oldPassword" placeholder="старый пароль" class="form-control" required>
  					<?php echo $message3 ?>
  				</div>

  				<!--Ввод нового пароля-->
  				<div class="form-group">
  					<label><i>Введите новый пароль :</i></label>
  					<input type="password" name="passwordChange" placeholder="новый пароль" class="form-control" required>
  					<?php echo $message1 ?>
  				</div>

  				<!--Повторный ввод нового пароля-->
  				<div class="form-group">
  					<label><i>Повторно введите новый пароль :</i></label>
  					<input type="password" name="newPassword" placeholder="повторите новый пароль" class="form-control" required>
  					<?php echo $message ?>
  				</div>
  				<center><button class="btn btn-success" name="submit" >Поменять пароль!</button></center>
  			</form>
  		</div>
	</div>
</div>
</body>
</html>
<?php 
}
else
{
	header("location:loginpage.php");
}
?>
