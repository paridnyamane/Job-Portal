<?php session_start();

$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("jobscope",$link) or die("can not select database");

$q="select * from jobs where j_active=1 order by j_id desc ";
$res=mysql_query($q,$link) or die ("can not select database");


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
			
			<img src="images/image.png">
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
</body>
</html>
