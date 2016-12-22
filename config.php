<?php
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='likewhat';
	$con=new mysqli($servername,$username,$password,$dbname);
				
	if ($con->connect_error){
		die('error to connect');
	}
	mysqli_query($con,"SET NAMES 'utf8'"); 
    mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
    mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");
?>				