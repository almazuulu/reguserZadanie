<?php
	//подключение необходимых файлов
	include("includes/header.php"); 
?>
<title>Страница Авторизации </title>
</head>
<body>
  <div class="container">
  	<div class="login-form col-md-4 offset-md-4">
  		<div class="jumbotron" style="margin-top: 50px; padding-top: 20px;">
  			<h2 align="center" style="color: green;"> Форма Авторизации </h2>
  			<form method="post">
  				<!--Ввод email-->
  				<div class="form-group">
  					<label>E-mail :</label>
  					<input type="email" name="emailUser" class="form-control"/>
  				</div>

  				<!--Ввод пароля-->
  				<div class="form-group">
  					<label>Пароль :</label>
  					<input type="password" name="passwrd" class="form-control"/>
  				</div>

  				<!--Запомнить пользователя-->
  				<div class="form-group">
  					<input type="checkbox" name="check"/>
  					Запомнить меня!
  				</div>
  			</form>
  			
  		</div>
  		
  	</div>
  	
  </div>

</body>
</html>