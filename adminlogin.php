<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	include("includes/functions.php");

	//инициализация необходимых параметров
	$message1=""; $message2="";

	session_start();
	//валидация
	if(isset($_POST['submit']))
	{
		$adminLog=$_POST['adminLogin'];
		$password=$_POST['passwrd'];
	if(empty($adminLog))
	{
		$message1="<div class='error'>Пожалуйста введите свой Логин!</div>";
	}
	
	else
	{
			$pass_w=mysqli_query($conDB,"SELECT password FROM admin WHERE name='$adminLog'");
			$pass_d=mysqli_fetch_array($pass_w);
			$ppass=$pass_d['password'];
			
			//$password=md5($password);
			//при не верном пароле
			if($ppass!=$password)
			{
				$message2="<div class='error'>Не правильный пароль!</div>";
			}
			else
			{
				$_SESSION['name']=$adminLog;
				header("location:adminpage.php"); //при успешной авторизации зайти на страницу пользователя
			}
		}
	
}

?>
<title>Авторизация Админа </title>
</head>

<style type="text/css">
	.success
	{
		font-weight: bold;
		color:green;
	}
	.error
	{
		color: red;
	}
	#body-bg
	{
		background: url("images/imagebg.jpg") center no-repeat fixed;
	}

</style>
<body id="body-bg">
  <div class="container">
  	<div class="login-form col-md-4 offset-md-4">
  		<div class="jumbotron" style="margin-top: 50px; padding-top: 20px; padding-bottom: 20px;">
  			<h2 align="center" style="color: green;"> Авторизация Админа </h2>
  			<form method="post" enctype="multipart/form-data">
  				<!--Ввод email-->
  				<div class="form-group">
  					<label>Логин Админа :</label>
  					<input type="text" name="adminLogin" class="form-control" placeholder="логин"   required>
  					<?php $message1 ?>
  				</div>

  				<!--Ввод пароля-->
  				<div class="form-group">
  					<label>Пароль :</label>
  					<input type="password" name="passwrd" class="form-control" placeholder="пароль" required>
  					<?php echo $message2 ?>
  				</div>

  				<!--Ввод пароля-->
  				<div class="form-group">
  					<center>
  					<input type="submit" name="submit" value= "Зайти!" class="btn btn-success" />
  				</center>	
  				</div>

  				<center><a href="signup.php">Пройти регистрацию! </a></center>
  			
  			</form>
  			
  		</div>
  		
  	</div>
  	
  </div>

</body>
</html>