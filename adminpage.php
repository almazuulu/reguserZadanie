<?php
//подключение необходимых файлов
	include("includes/header.php"); 
	include("includes/config.php");

	session_start();
	$nameSession= $_SESSION['name'];

	if(isset($nameSession))
	{
?>
	<title>Профиль страницы</title>
<style type="text/css">
	#body-bg
	{
		background-color: #efefef
	}

	#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>

</head>
<body id="body-bg">
<div class="container" style="width: 1200px;">
	<h3>Добро пожаловать на страницу Администратора! </h3>
	
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Поиск по имени пользователя.." title="Type in a name">
	
	<table id="filter-table" class="table table-striped table-bordered">
		<?php 
		mysqli_query($conDB,"SET NAMES utf8"); 
		$showResult=mysqli_query($conDB,"SELECT id,mail,uName,lastName,firstName,middleName,sexUser,countryUser,registrDate,lastActiveDate FROM users");
		$row=mysqli_num_rows($showResult);
		echo "<h4 style='color:blue'>Всего зарегестрированных пользователей: ".$row."</h4>";
		?>
		
		<tr class='table-filters'>
        <td><b>ФИЛЬТР ПО: </b></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        	<b>ПОЛОВОМУ ПРИЗНАКУ</b>
            <input type="text"/>
        </td>
        <td>
        	<b>СТРАНЕ</b>
            <input type="text"/>
        </td>
         <td></td>
        <td></td>
        <td></td>
        </tr>

		<tr class="header">
				<th> E-mail </th>
				<th> Логин </th>
				<th> Фамилия </th>
				<th> Имя </th>
				<th> Отчество </th>
				<th> Пол </th>
				<th> Страна </th>
				<th> Действия </th>
				<th> Дата регистрации </th>
				<th> Дата последней активности </th>
		</tr>
			<?php 
			mysqli_query($conDB,"SET NAMES utf8"); 
			$showResult=mysqli_query($conDB,"SELECT id,mail,uName,lastName,firstName,middleName,sexUser,countryUser,registrDate,lastActiveDate FROM users");
			while ($retrive=mysqli_fetch_array($showResult)) 
			{
			$idUser=$retrive['id'];
			$mailUser=$retrive['mail'];
			$loginUser=$retrive['uName'];
			$lName=$retrive['lastName'];
			$fName=$retrive['firstName'];
			$mName=$retrive['middleName'];
			$userSex=$retrive['sexUser'];
			$userCountry=$retrive['countryUser'];
			$dateRegist=$retrive['registrDate'];
			$dateActive=$retrive['lastActiveDate'];
			?>
			<tr class='table-data'>
				<td><h5><?php echo $mailUser ?></h5></td>
				<td><h5><?php echo $loginUser ?><h5></td>
				<td><h5><?php echo $lName ?><h5></td>
				<td><h5><?php echo $fName ?><h5></td>
				<td><h5><?php echo $mName ?><h5></td>
				
				<td><h5><?php echo $userSex ?>
				</br></br><a href='editSexAdmin.php?editSex=$idUser'><button class='btn btn-success'>Изменить/</br>Добавить Пол</button></a>
				</br><a href='deleteSexAdmin.php?delSex=$idUser'><button class='btn btn-danger'>Удалить Пол</button></a>
				<h5></td>
				
				<td><h5><?php echo $userCountry ?>
				</br></br><a href='editCountryAdmin.php?editCountry=$idUser'><button class='btn btn-success'>Изменить/</br>Добавить Страну</button></a>
				</br><a href='deleteCountryAdmin.php?delCountry=$idUser'><button class='btn btn-danger'>Удалить Страну</button></a>
				<h5></td>
				<td><h5></br></br><a href='profilepageUser.php?upd=$idUser'><button class='btn btn-success'>Просмотр профиля</button></a>
			</br><a href='statusChange.php?upd=$idUser'><button class='btn btn-danger'>Смена статуса</button>
			</td>
				<td><?php echo $dateRegist ?></td>
				<td><?php echo $dateActive ?></td>
				
			</tr>
			<?php 
			}
			?>
		</table>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<!--
<script type="text/javascript" src="js/ddtf.js"></script>
<script>
	$('#myTable').ddTableFilter();
</script>
-->
<script>
$('.table-filters input').on('input', function () {
    filterTable($(this).parents('table'));
});

function filterTable($table) {
    var $filters = $table.find('.table-filters td');
    var $rows = $table.find('.table-data');
    $rows.each(function (rowIndex) {
        var valid = true;
        $(this).find('td').each(function (colIndex) {
            if ($filters.eq(colIndex).find('input').val()) {
                if ($(this).html().toLowerCase().indexOf(
                $filters.eq(colIndex).find('input').val().toLowerCase()) == -1) {
                    valid = valid && false;
                }
            }
        });
        if (valid === true) {
            $(this).css('display ', '');
        } else {
            $(this).css('display', 'none');
        }
    });
}
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("filter-table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
<?php
}
	else
	{
		header("location:adminlogin.php");
	}
?>
