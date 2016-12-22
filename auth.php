<?php
session_start();
include_once 'config.php';
$login=$_GET['login'];
$pass=$_GET['pass'];
$sql='SELECT * FROM users WHERE (login="'.$login.'" and password="'.$pass.'")';
$result=$con->query($sql);
if ($result->num_rows>0){
	while($row=$result->fetch_assoc()){
?>
<br>
<?php
$_SESSION['login'] = $login;
echo 'user exist';
break;
}
}
?>