<?php
	include 'config/config.php';
	$id=addslashes($_GET['id']);
	$query="DELETE FROM ".$prefix."order_product WHERE order_id='$id'";
	$result=mysqli_query($link, $query);
	header('location:admin/orders?success=true');
?>