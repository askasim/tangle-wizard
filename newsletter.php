<?php

	include 'config/config.php';
	$email=addslashes($_POST['user_email']);
	$query="INSERT INTO `".$prefix."newsletter`(`email`) 
	VALUES 
	('$email')";
	$res=mysqli_query($link, $query);

?>