<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>WhyWhat</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js">
		</script>
	</head>
	<body>
		<div class="container">
			<!--HEADER-->
			<?php include 'header.php';?>
			<!--HEADER-->
			<!-- NAVIGATION -->
			<?php include 'navigation.php';?>
			<!-- NAVIGATION -->
			<!--NAVIGATION -->
			
			
			<div class="users-table">
				<?php require_once 'catTable.php'; ?>
				
			</div>
			<!-- MAIN SECTION-->
			
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!-- FOOTER-->
			
		</div>
		<script src="js/logout.js"></script>
		<script src="js/deleteCat.js"></script>
		
	</body>
</html>