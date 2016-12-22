<?php
	include_once 'config.php';
    $id_user=$_GET['id_user'];
   

     $sql = 'DELETE FROM users
        WHERE id_user="'.$id_user.'"';
    if ($con->query($sql) === TRUE) {
    echo "Deleted successfully";
   } else {
    echo "Error: " . $sql . "<br>" . $con->error;

    

   }
 


?>