<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Why&What</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
			<div class="categories-bg">
			<ul class="list">

			<?php
			include_once 'config.php'; 

			
			$sql='SELECT * FROM category';
			
			$result=$con->query($sql);
			
				
				if ($result->num_rows>0){
					while($row=$result->fetch_assoc()){
					
				?>
			     
			     <li class="cat">
				 <a href="news.php?id_cat=<?php echo $row['id_cat'];?>">
				 <img  src="<?php echo $row['url_image']; ?>" alt="Image doesn't load" >
				 </a>
				 <h3 class="cat-title"> <?php echo $row['title'];?></h3>
				
               </li>

			    <?php
				
				}
				}
			
			?>
			</ul>
			</div>
			<!--MAIN SECTION-->

			 <!--LOGIN MODAL WINDOW-->
       
			<?php require_once 'modalLogin.php'; ?>
			
            <!--LOGIN MODAL WINDOW-->

            <!--REGISTER MODEL WINDOW-->
            <?php require_once 'modalRegister.php'; ?>
            <!--REGISTER MODEL WINDOW-->
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!--FOOTER -->
		</div>
	
		<script src="js/logout.js"></script>
		<script src="js/login.js"></script>
		<script src="js/modalWindows.js"></script>
		<script src="js/register.js"></script>
      
		
	</body>
</html>