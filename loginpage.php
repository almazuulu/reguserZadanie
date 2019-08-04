<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	include("includes/functions.php");

	//инициализация необходимых параметров
	$message1=""; $message2="";
	$mail="";
	$password="";

	session_start();
	//валидация
	if(isset($_POST['submit']))
	{
		$mail=$_POST['emailUser'];
		$password=$_POST['passwrd'];
		$checkbox=isset($_POST['checkMe']);

	if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
		{
			$message1="<div class='error'>Пожалуйста введите правильный адрес почты!</div>";
	    }
	else if(email_exists($mail,$conDB))
		{
			$pass_w=mysqli_query($conDB,"SELECT password FROM users WHERE mail='$mail'");
			$pass_d=mysqli_fetch_array($pass_w);
			$ppass=$pass_d['password'];
			
			$password=md5($password);
			//при не верном пароле
			if($password!=$ppass)
			{
				$message2="<div class='error'>Не правильный пароль!</div>";
			}
			else
			{
				$_SESSION['mailUser']=$mail;
				if($checkbox=='on')
				{
					setcookie('name',$mail,time()+500); //cookies истекает через 2 минуты
				}
				//дата захода
				$time = time() + (4*60*60);
				$dateLogin= date("D M j G:i:s T Y",$time);
				mysqli_query($conDB,"UPDATE users SET lastActiveDate = '$dateLogin' WHERE mail = '$mail'");

				header("location:profilepage.php"); //при успешной авторизации зайти на страницу пользователя
			}
		}
	else
	{
		$message1="<div class='error'>Такой почты не существует!</div>";
	}
}

?>
<title>Страница Авторизации </title>
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
  			<h2 align="center" style="color: green;"> Форма Авторизации </h2>
  			<form method="post" enctype="multipart/form-data">
  				<!--Ввод email-->
  				<div class="form-group">
  					<label>E-mail :</label>
  					<input type="text" name="emailUser" class="form-control" required>
  					<?php echo $message1; ?>
  				</div>

  				<!--Ввод пароля-->
  				<div class="form-group">
  					<label>Пароль :</label>
  					<input type="password" name="passwrd" class="form-control" required>
  					<?php echo $message2; ?>
  				</div>

  				<!--Запомнить пользователя-->
  				<div class="form-group">
  					<input type="checkbox" name="checkMe"/>
  					&nbsp;
  					Оставаться в системе!
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