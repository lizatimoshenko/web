<?php
	
    include_once 'config.php';		
	$login=$_POST['login'];
	$pass=$_POST['password'];
    $first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
  
  
	$sql="INSERT INTO users" ."(login,password,first_name,last_name)". "VALUES('$login','$pass','$first_name','$last_name')";
	
	if ($con->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
							
?>