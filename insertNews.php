<?php
    include_once 'config.php';
	


	$id_cat=$_GET['id_cat'];
	
	$title=$_GET['title'];

    $url_image=$_GET['url_image'];
	$content=$_GET['content'];

	$sql="INSERT INTO news (`title`,`id_cat`,`content`,`url_image`) VALUES('$title','$id_cat','$content','$url_image')";
	
	
	if ($con->query($sql) === TRUE) {

    echo "New records created successfully";
    

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}					
?>