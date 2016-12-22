<?php
	require_once 'config.php';


    $id_news=$_GET['id_news'];
 
    $title=$_GET['title'];
  
    $url_image=$_GET['url_image'];
    $content=$_GET['content'];
 
    $sql = 'UPDATE `news` SET `title`="'.$title.'",`url_image`="'.$url_image.'",`content`="'.$content.'"  WHERE `id_news`="'.$id_news.'"';

   
    if ($con->query($sql) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>