<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>WhyWhat</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.1.1.min.js">
		</script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<!--HEADER-->
			<?php include 'header.php';?>
			<!--HEADER-->
			<?php include 'navigation.php';?>
			<!--NAVIGATION -->
			<!-- MAIN SECTION-->
			<div class="users-table">
				<?php require_once 'usersTable.php'; ?>
				
				<p  class="yellow click" id="add">Add New</p>
				
				
				<?php require_once 'addModal.php'; ?>
				<?php require_once 'editModal.php'; ?>
			</div>
			<!-- MAIN SECTION-->
			
			<!-- FOOTER-->
		    <?php include 'footer.php';?>
			<!-- FOOTER-->
			
		</div>
		
		<script src="js/addModal.js"></script>
		<script src="js/editModal.js"></script>
		<script src="js/addUser.js"></script>
		<script src="js/updateUser.js"></script>
		<script src="js/logout.js"></script>
		<script src="js/deleteUser.js"></script>
	</body>
</html>