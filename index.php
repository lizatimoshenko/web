<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Why&What</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body >
		<div class="container">
			<!--HEADER-->
			<?php include 'header.php';?>
			<!--HEADER-->
			<!--NAVIGATION-->
			<?php include 'navigation.php';?>
			<!--NAVIGATION -->
			
			<!--MAIN SECTION-->
			<!--SLIDER-->
			<div class="content-slider ">
				<div class="slider">
					<div class="demo">
						<button class="prev"><</button>
						<button class="next">></button>
						<div class="c-slider">
							<div style="display: inline-block">
								<img src="image/slider/1.jpg">
							</div>
							<div>
								<img src="image/slider/2.jpg">
							</div>
							<div>
								<img src="image/slider/3.jpg">
							</div>
							<div>
								<img src="image/slider/4.jpg">
							</div>
							<div>
								<img src="image/slider/5.jpg">
							</div>
							<div>
								<img src="image/slider/6.jpg">
							</div>
							
							
						</div>
						<div style="text-align:center" class="control-button">
							<span class="dot"  id="1"></span>
							<span class="dot"  id="2"></span>
							<span class="dot"  id="3"></span>
							<span class="dot"  id="4"></span>
							<span class="dot"  id="5"></span>
							<span class="dot"  id="6"></span>
						</div>
					</div>
				</div>
			</div>
			<!--SLIDER-->

			<!-- CONTENT -->
			
			<div class="content">
				
				<div class="video">
					<p>Watch this video to practice you listening skill</p>
					<iframe src="https://www.youtube.com/embed/MMmOLN5zBLY" frameborder="0" allowfullscreen></iframe>
				</div>
				
				
				<!--Секция для списка новостей -->
				<?php require_once 'sidebar.php'; ?>
			</div>
			
			<!-- CONTENT -->
			<!--LOGIN MODAL WINDOW-->
			
			<?php require_once 'modalLogin.php'; ?>
			
			<!--LOGIN MODAL WINDOW-->
			<!--REGISTER MODEL WINDOW-->
			<?php require_once 'modalRegister.php'; ?>
			<!--REGISTER MODEL WINDOW-->
			
			<!--MAIN SECTION-->
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!-- FOOTER-->
		</div>
		<script src="js/modalWindows.js"></script>
		<script src="js/register.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/logout.js"></script>
		<script src="js/login.js"></script>
		
	</body>
</html>