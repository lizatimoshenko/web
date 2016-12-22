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
				$id_news=$_GET['id_news'];
				$sql='SELECT title,url_image,content FROM news WHERE `id_news` = "'.$id_news.'"';
					
					$result=$con->query($sql);
					
				if ($result->num_rows>0){
								while($row=$result->fetch_assoc()){
								
				?>
				<div>
					<img class="news-image" src="<?php echo $row['url_image'];?>">
				</div>
				<div class="edit-form-div">
					<form class="edit-news-form" method="get">
						<label>Title</label>
						<input type="text" id="title" value="<?php echo $row['title'];?>" />
						<label>Image url</label>
						<input type="text" value="<?php echo $row['url_image'];?>" id="url_image" />
						<textarea id="news_text" ><?php echo $row['content'];?></textarea>
						<input type="submit" value="OK"  id="edit-news">
						<input type="hidden" name="" id="id" value="<?php echo $id_news;?>">
					</form>
				</div>
				
				
				<?php
				}
				}?>
			</div>
			<!-- MAIN SECTION-->
			
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!-- FOOTER-->
			
		</div>
		<script src="js/logout.js"></script>
		<script src="js/editNews.js"></script>
		
	</body>
</html>