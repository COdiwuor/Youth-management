<?php	
	$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database"); 
	
	mysqli_select_db($db,'ycsms') or die('Error selecting database : ' . mysqli_error());
	
		
	

?>