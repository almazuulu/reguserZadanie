<?php
	function email_exists($mail,$conDB) 
	{
		$row=mysqli_query($conDB,"SELECT id FROM users WHERE mail='$mail'");
		
		//print_r($row); //можно убрать коммент чтобы проверить верность
		{
			if(mysqli_num_rows($row)==1)
			{
				return true; //если это верно то выводится сообщение что почта уже есть
			}
			else {
				return false; //если это не верно то регистрируется сообщение	
			}
		} 
	}
?>