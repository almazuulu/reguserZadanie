<?php
	include("includes/config.php");
   $idUser=$_GET['del'];
   mysqli_query($conDB,"DELETE FROM users WHERE id='$idUser'");
   header("location:adminpage.php");
?>