<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		
	</div>
</div>

<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2 class="title">POST JOB</a></h2>
					<p class="meta">JOB SPECIFICATION</p>
					<div class="entry">
					<form action="process_postjob.php" method="post">
						TITLE<br> <input type="text" name="title" style="width:200px;">
						<BR><BR>CATEGORIES
							<br><SELECT name="cat" style="width:200px;">
							<?php

						$link=mysql_connect("localhost","root","") or die("cant connect");
			
						mysql_select_db("jobscope",$link) or die("cant select db");
	
						$q="select * from categories";
	
						$res=mysql_query($q,$link) or die('wrong query');
	
						while($row=mysql_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
						</SELECT>
								
							<br><BR> WORKING HOURS <BR> <INPUT TYPE = "TEXT"name="hours" style="width:200px;">
							<BR><BR> SALARY<BR><INPUT TYPE ="TEXT" name="salary" style="width:200px;">
							<BR><BR> EXPERIENCE <BR> <INPUT TYPE ="TEXT" name="experience" style="width:200px;">
							<BR><BR>DISCRIPTION<BR> <TEXTAREA name="disc" style="width:200px;"></TEXTAREA >
							<BR><BR>CITY<BR><INPUT TYPE="TEXT" name="city" style="width:200px;">
							<center><br><br> <input type="submit" value="submit"></center>
					</form>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
</body>
</html>
