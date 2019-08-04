 <?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	include("includes/functions.php");
?>
<title>Профиль страницы</title>
<style type="text/css">
	#body-bg
	{
		background-color: #efefef
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
	<div class="col-md-4 offset-md-4">
	<div class="boxchangepass">
	<h2 align="center" style="color: green;"> Поменять пароль </h2>
</br>
		<form method="post">
  				
  				<!--Ввод нового пароля-->
  				<div class="form-group">
  					<label><i>Введите новый пароль :</i></label>
  					<input type="password" name="passwrd" placeholder="новый пароль" class="form-control" required>
  				</div>

  				<!--Повторный ввод нового пароля-->
  				<div class="form-group">
  					<label><i>Повторно введите новый пароль :</i></label>
  					<input type="password" name="passwrdnew" placeholder="повторите новый пароль" class="form-control" required>
  				</div>
  				<center><button class="btn btn-success" name="changePass" >Поменять пароль!</button></center>
  			</form>
  		</div>
	</div>
</div>

</body>
</html>
