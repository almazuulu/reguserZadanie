<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	include("includes/functions.php");
	$message1=""; $message2="";
	$mail="";
	$password="";

	if(isset($_POST['submit']))
	{
		$mail=$_POST['emailUser'];
		$password=$_POST['passwrd'];

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
			if($password!=$ppass)
			{
				$message2="<div class='error'>Не правильный пароль!</div>";
			}
			else
			{
				header("location:profilepage.php");
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
  		<div class="jumbotron" style="margin-top: 50px; padding-top: 20px; padding-bottom: 10px;">
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
  					<input type="checkbox" name="check"/>
  					&nbsp;
  					Запомнить меня!
  				</div>

  				<!--Ввод пароля-->
  				<div class="form-group">
  					<center>
  					<input type="submit" name="submit" value= "Зайти!" class="btn btn-success" />
  				</center>	
  				</div>
  			</form>
  			
  		</div>
  		
  	</div>
  	
  </div>

</body>
</html>