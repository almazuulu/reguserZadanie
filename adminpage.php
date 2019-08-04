<?php
//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");
	session_start();
	$adminLog= $_SESSION['name'];

	echo "$adminLog";

	if(isset($adminLog))
	{
		
	}
	else
	{
		header("location:adminlogin.php");
	}



?>