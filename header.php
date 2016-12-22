<div class="header">
	<?php
		if (isset($_SESSION['login'])) {
	?>
	<ul>
		<li>
			<p id="logout" class="btn grey click">Log out</p>
		</li>
		<li>
			<span class="hello">Hello,
				<?php echo $_SESSION['login'];?>
			</span>
		</li>
	</ul>
	<?php
		}
		else{
	?>
	<ul>
		<li>
			<p class="btn grey click" id="signIn" >
				Sign in
			</p>
		</li>
		<li>
			<p class="btn green click" id="signUp">
				Sign up
			</p>
			
		</li>
	</ul>
	<?php
		}
	?>
	<img class="logo" src="image/logo.svg" >
	<p class="title"><i>Why&What</i>
	</p>
	<p class="info" >
		English learning sources
	</p>
</div>