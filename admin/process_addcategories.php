<?php session_start();

if(empty($_POST))
{
	exit;
}
$msg=array();

if(empty($_POST['nm']))
{
	$msg[]="One of the field is empty";
}

if(!empty($msg))
{
	echo "<b>Errors:</b><br>";
	foreach($msg as $k)
	{
		echo "<li>".$k;
	}
}
else
{
	$link=mysql_connect("localhost","root","") or die("cant connect");
	mysql_select_db("jobscope",$link) or die("cant select db");
	$nm=$_POST['nm'];
	$q="insert into categories(cat_nm)values('$nm')";
	mysql_query($q, $link) or die("wrong query");
	mysql_close($link);
	header("location:category.php");
}