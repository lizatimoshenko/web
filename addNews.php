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
			
			<div class="edit">
				<?php
				include_once 'config.php';
				$id=$_GET['id_cat'];
				
				?>
				<div>
					<img class="news-image" src="" alt="Image doesn't exist">
				</div>
				<div class="edit-form-div">
					<form class="edit-news-form" method="get">
						<label>Title</label>
						<input type="text" id="addTitle" value="" />
						<label>Image url</label>
						<input type="text" value="" id="addImage" />
						<textarea id="addText" ></textarea>
						
						<input type="hidden" name="id_cat" id="id_cat" value="<?php echo $id;?>">
						<input type="submit" value="OK"  id="add-news">
					</form>
				</div>
				
				
				
			</div>
			<!-- MAIN SECTION-->
			
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!-- FOOTER-->
			
		</div>
		<script src="js/logout.js"></script>
		<script src="js/editNews.js"></script>
		<script src="js/addNews.js"></script>
		
	</body>
</html>