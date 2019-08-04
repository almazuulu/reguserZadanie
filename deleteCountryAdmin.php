<?php
   include("includes/config.php");
   $idUser=$_GET['delCountry'];
   mysqli_query($conDB,"UPDATE users SET countryUser = ' ' WHERE id = '$idUser'");
   header("location:adminpage.php");
?>