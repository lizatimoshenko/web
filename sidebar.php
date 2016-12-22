<div class="sidebar">
	<?php
	include_once 'config.php';
	$sql='SELECT * FROM news ORDER BY id_news DESC LIMIT 4';
	$result=$con->query($sql);
	
	?>
	<p class="news">Latest news</p>
	
	<ul>
		<?php
		if ($result->num_rows>0){
			while($row=$result->fetch_assoc()){
			
		?>
		<li>
			<img src="<?php echo $row['url_image']; ?>" width="75" height="75">
            <a href=href="new.php?id_news=<?php echo $row['id_news'];?>"> <?php echo $row['title']; ?>"</a>
		</li>
		<?php
		}
 }
?>  
	</ul>
</div>