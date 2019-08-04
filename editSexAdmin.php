<?php
	//подключаем необходимые файлы
	include("includes/header.php"); 
	include("includes/config.php");
	include("includes/functions.php");
	$idUser=$_GET['editSex'];
	
	//инициализация необходимых сообщений
	$messageSucсess="";
	if(isset($_POST['submit']))
	{
	
		$sexUser=$_POST['sex'];

			mysqli_query($conDB,"SET NAMES utf8"); //устанавливаем русский шрифт

			//записываем в Базу данных записи
			mysqli_query($conDB,"UPDATE users SET sexUser = '$sexUser' WHERE id = '$idUser'");
			//сообщение об успешной обновлении пола
			$messageSucсess="<div class='success'><center>Пол успешно изменен!</center></div>";
			header("location:adminpage.php");
		
	}
?>
<title>Регистрация нового пользователя</title>
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
			<!--стили для формы регистрации-->
			<div class="jumbotron" style="margin-top: 20px; padding-top: 25px;">
				<h3 align="center"> Редактировать пол</h3>
				<?php echo $messageSucсess; ?>	
			</br>
				
				<form method="post">	
				<!--Пол пользователя -->
				<div class="form-group">
					<label>Выберите Пол : </label>
					<select class="form-control" name="sex">
					  <option value="Мужской">Мужской</option>
					  <option value="Женский">Женский</option>
					</select>
				</div>
			</br>

		<!--Кнопка подтвердить -->
		<center><input type="submit" value="Обновить Пол" name="submit" class="btn btn-success"></center>
	</form>
			</div>
		</div>		
	</div>		
</body>
</html>