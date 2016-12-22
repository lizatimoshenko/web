<?php
	include_once 'config.php';
    $id_user=$_GET['id_user'];
    echo $id_user;
    $login=$_GET['login'];
    echo $login;
    $first_name=$_GET['first_name'];
    $last_name=$_GET['last_name'];
 
    $sql = 'UPDATE `users` SET `login`="'.$login.'",`first_name`="'.$first_name.'",`last_name`="'.$last_name.'"  WHERE `id_user`="'.$id_user.'"';

   
    if ($con->query($sql) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>