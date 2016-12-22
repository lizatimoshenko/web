<?php
	include_once 'config.php';
    $id_news=$_GET['id_news'];
   

     $sql = 'DELETE FROM news
        WHERE id_news="'.$id_news.'"';
    if ($con->query($sql) === TRUE) {
    echo "Deleted successfully";
   } else {
    echo "Error: " . $sql . "<br>" . $con->error;

    

   }
 


?>