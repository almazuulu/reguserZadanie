<?php
	include("includes/config.php");
   $idUser=$_GET['delSex'];
   mysqli_query($conDB,"UPDATE users SET sexUser = ' ' WHERE id = '$idUser'");
   header("location:adminpage.php");
?>