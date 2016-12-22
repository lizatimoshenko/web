<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>LikeWhat</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<!--HEADER-->
			<?php include 'header.php';?>
			<!--HEADER-->
			<!-- NAVIGATION -->
			<?php include 'navigation.php';?>
			<!-- NAVIGATION -->
			<!-- Contact-->
			<div class="content">
				
				
				<div class="contact-info" >
					<div class="contact-us">
						<h1>Contacts us</h1>
						<p>Whether you’re looking for answers, would like to solve a problem, or just want to let us know how we did, you’ll find many ways to contact us right here. We’ll help you resolve your issues quickly and easily, getting you back to more important things.</p>
						<div class="feed-icon">
							<ul>
								<li><img src="image/feedicon1.svg"></li>
								<li><img src="image/feedicon2.svg"></li>
							</ul>
						</div>
					</div>
					<div class="feedback">
						<form class="cd-form floating-labels">
							
							<div class="icon">
								<label class="cd-label" for="cd-name">Name</label>
								<input class="user" type="text" name="cd-name" id="cd-name" required>
							</div>
							<div class="icon">
								<label class="cd-label" for="cd-company">Issue</label>
								<input class="company" type="text" name="cd-company" id="cd-company">
							</div>
							
							<div>
								<h4>Country</h4>
								<p class="cd-select icon">
									<select class="budget">
										<option value="0">Select your country</option>
										<option value="1"> Ukraine</option>
										<option value="2">Poland</option>
										<option value="3">Hungary</option>
									</select>
								</p>
							</div>
							<div class="gender">
								<h4>Gender</h4>
								<ul class="cd-form-list">
									<li>
										<input type="radio" name="radio-button" id="cd-radio-1" checked>
										<label for="cd-radio-1">Female</label>
									</li>
									
									<li>
										<input type="radio" name="radio-button" id="cd-radio-2">
										<label for="cd-radio-2">Male</label>
									</li>
								</ul>
							</div>
							<div class="do-you-like">
								<h4>Do you like our site?</h4>
								<ul class="cd-form-list">
									<li>
										<input type="checkbox" id="cd-checkbox-1">
										<label for="cd-checkbox-1">Yes</label>
									</li>
									<li>
										<input type="checkbox" id="cd-checkbox-2">
										<label for="cd-checkbox-2">No</label>
									</li>
									
								</ul>
							</div>
							<div class="icon">
								<label class="cd-label" for="cd-textarea">Leave your comments</label>
								<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
							</div>
							<div>
								
								<input type="file" class="custom-file-input">
								
							</div>
							<div>
								<input type="submit" value="Send Message">
							</div>
							
						</form>
					</div>
				</div>
				<div class="wrap-map">
					<div id="map">
						
					</div>
				</div>
				
			</div>
			<!--Contact -->
			
			<!--LOGIN MODAL WINDOW-->
			
			<?php require_once 'modalLogin.php'; ?>
			
			<!--LOGIN MODAL WINDOW-->
			<!--REGISTER MODEL WINDOW-->
			<?php require_once 'modalRegister.php'; ?>
			<!--REGISTER MODEL WINDOW-->
			<!-- FOOTER-->
			<?php require_once 'footer.php'; ?>
			<!-- FOOTER-->
		</div>
		<script>
		
		
		function initMap() {
		var uluru = {lat: 49.994507, lng: 36.1457421};
		var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 4,
		center: uluru
		});
		var marker = new google.maps.Marker({
		position: uluru,
		map: map
		});
		}
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ5FTHb2PkiZ9iupDEvDkK1GWMTWWvOwA&callback=initMap">
		
		</script>
		<script src="js/logout.js"></script>
		<script src="js/login.js"></script>
		<script src="js/modalWindows.js"></script>
		<script src="js/register.js"></script>
		
	</body>
</html>