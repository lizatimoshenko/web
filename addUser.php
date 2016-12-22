<?php
    include_once 'config.php';
	$login=$_POST['login1'];
	$pass=$_POST['password1'];
    $first_name=$_POST['first_name1'];
	$last_name=$_POST['last_name1'];
    $group=$_POST['group'];
    $date=$date = date("Y-m-d H:i:s");
	$sql="INSERT INTO users (`login`,`password`,`first_name`,`last_name`,`group`,`date_creation`) VALUES('$login','$pass','$first_name','$last_name',$group,'$date')";
	
	
	if ($con->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}					
?>