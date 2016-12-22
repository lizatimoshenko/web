<div class="nav flexbox clearfix">
	
	<ul class="clearfix">
		<li><a href="index.php" class="home" data-hover="Home">
			<span>Home</span></a></li>
			<li><a href="categories.php" data-hover="News">News</a>
			<ul>
				<?php
				include_once 'config.php';
				$sql='SELECT * FROM category';
				$result=$con->query($sql);
				
					
					if ($result->num_rows>0){
						while($row=$result->fetch_assoc()){
						
				?>
				<li><a href="news.php?id_cat=<?php echo $row['id_cat'];?>"><?php echo $row['title']; ?></a></li>
				<?php
				
				}
				}
				
				?>
			</ul>
		</li>
		<li><a href="contacts.php" data-hover="Contact">Contact</a></li>
		<?php
		if (isset($_SESSION['login'])) {
		?>
		<li><a href="admin.php">Users</a></li>
		<li><a href="categoryTable.php" >Categories</a></li>
		<?php
		}
		else{
		
		}
		?>
	</ul>
	
</div>