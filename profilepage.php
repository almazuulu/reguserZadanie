<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	$email=$_SESSION['mailUser'];
 echo "Вы только что зашли на сайт!";
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
		<button class="btn btn-outline-success" style="float:right;margin-top: 20px;">Выйти</button>
	</div>

</body>
</html>

