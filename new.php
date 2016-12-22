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
		

		    <?php

		      include_once 'config.php'; 
              $id_news=$_GET['id_news'];
              

              $sql='SELECT * FROM news WHERE id_news="'.$id_news.'"';

              $result=$con->query($sql);
			
				
				if ($result->num_rows>0){
					while($row=$result->fetch_assoc()){
					
				?>
			     
			     <h3 align="center" class="news-title title-size"> <?php echo $row['title'];?></h3>
				 <div class="img-div">
				 <img align="right" class="main-img" src="<?php echo $row['url_image']; ?>" alt="Image doesn't load" >
				  </div>
				 <div class="text">
				 <p  class="description mar"> <?php 
				     
				      echo $row['content'];
				      ?>
				      
				 </p>

                 </div>
			    <?php
				
				}
				}
			

              ?>
            
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
			<!-- FOOTER-->
			<!--FOOTER -->
		</div>
	
		<script src="js/logout.js"></script>
		<script src="js/login.js"></script>
		<script src="js/modalWindows.js"></script>
		<script src="js/register.js"></script>
      
		
	</body>
</html>