<?php 
	$product_id=addslashes($_POST['product_id']);
	$quantity=addslashes($_POST['quantity']);
	$cookie_name='cart';
	if (!isset($_COOKIE[$cookie_name])) {
	  $cookie_value = $product_id.",".$quantity;
	  setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
	} else {
	  $cookie_value=$_COOKIE[$cookie_name];
	  $cookie_value.="-".$product_id.",".$quantity;
	  setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
	}
	
?>