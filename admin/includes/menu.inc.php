
			<ul>
				<li><a href="index.php" class="first">Home</a></li>
				<li><a href="category.php">category</a></li>
				<?php
	
				if(isset($_SESSION['status']))
				{
					echo '<li><a href="process_logout.php">Logout</a></li>';
				}
	
				?>
				
			</ul>
		