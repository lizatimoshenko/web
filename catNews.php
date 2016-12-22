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
			
			<!-- MAIN SECTION-->
			
			<div class="users-table">
				<?php require_once 'newsTable.php';?>
				<a href="addNews.php?id_cat=<?php echo $id_cat;?>" class="yellow click" >Add New</a>
				
				
			</div>
			<!-- MAIN SECTION-->
			
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!-- FOOTER-->
			
		</div>
		<script src="js/logout.js"></script>
		<script src="js/deleteNews.js"></script>
		
	</body>
</html>