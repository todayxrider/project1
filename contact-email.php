<?php
include("connect.php");
if(isset($_POST['email'])){
	
	$msg='Name: '.$_POST['name']."\n"
			.'Email: '.$_POST['email']."\n"
			.'Phone: '.$_POST['phone']."\n"
			.'Subject: '.$_POST['subject']."\n"
			.'Message: '.$_POST['message'];
			
	mail('todayxromeo@gmail.com','testing',$msg);
	
	}
else
{
	echo "<script>alert('Email Sent');</script>";	
	
	}



?>