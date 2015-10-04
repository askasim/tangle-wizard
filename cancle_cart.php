<?php
	$cookie_name='cart';
	unset($_COOKIE[$cookie_name]);
	setcookie($cookie_name, '', time() - 3600,'/');
	header('location:home');

?>