<?php
	include_once 'config.php';
$id_cat=$_GET['id_cat'];
$sql = 'DELETE FROM category
WHERE id_cat="'.$id_cat.'"';
if ($con->query($sql) === TRUE) {
echo "Deleted successfully";
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}
?>