<?php
$con=mysql_connect("localhost","root","");
if($con)
{
echo "<script>alert('Connected');</script>";	
	}
	
$db=mysql_select_db("mgh");
if($db)
{
echo "<script>alert('Selected');</script>";	
	}	
?>