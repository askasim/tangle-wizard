<?php
	include 'config/config.php';
	$id=addslashes($_GET['id']);
	$query="UPDATE ".$prefix."orders SET status='Processed' WHERE id='$id'";
	$result=mysqli_query($link, $query);
	header('location:admin/orders?success=true');
?>