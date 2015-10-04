<?php
$page;
$title;

function parse_path() {
	$path = array();
	if (isset($_SERVER['REQUEST_URI'])) {
		$request_path = explode('?', $_SERVER['REQUEST_URI']);
		$path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
		$path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
		$path['call'] = utf8_decode($path['call_utf8']);
		if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
			$path['call'] = '';
		}
		$path['call_parts'] = explode('/', $path['call']);
	}
	return $path;
}
$path = parse_path();
	switch($path['call_parts'][0]) {
		case '' :
			$page = "home";
			$title = "Home";
			break;
		case 'home' :
			$page = "home";
			$title = "Home";
			break;
		case 'category' :
			$page = "category";
			$title = ucwords($path['call_parts'][1]);
			break;
		case 'about' :
			$page = "about";
			$title = "About Us";
			break;
		case 'contact' :
			$page = "contact";
			$title = "Contact Us";
			break;
		case 'cart' :
			$page = "cart";
			$title = "My Cart";
			break;
		case 'checkout' :
			$page = "checkout";
			$title = "Check Out";
			break;
		case 'support' :
			$page = "support";
			$title = "Help and Support";
			break;
		case 'user_details' :
			$page = "user_details";
			$title = "User Details";
			break;
		case 'pay' :
			$page = "pay";
			$title = "Pay";
			break;
		case 'success' :
			$page = "success";
			$title = "Successfull Purchase";
			break;
		default :
			$page = "product";
			$title = ucwords($path['call_parts'][0]);
			break;
}
?>