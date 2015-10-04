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
		$page = "dashboard";
		$title = "Dashboard";
		break;
	case 'dashboard' :
		$page = "dashboard";
		$title = "Dashboard";
		break;
	case 'addproduct':
		$page = "addproduct";
		$title = "Add new Product";
		break;
	case 'manageproduct':
		$page = "manageproduct";
		$title = "Manage Product";
		break;
	case 'categories':
		$page = "categories";
		$title = "ProductCategories";
		break;
	case 'about':
		$page = "pages";
		$title = "Edit About ";
		break;
	case 'addmedia':
		$page = "addmedia";
		$title = "Add New Media";
		break;
	case 'managemedia':
		$page = "managemedia";
		$title = "Manage Media";
		break;
	case 'messages':
		$page = "messages";
		$title = "Messages";
		break;
	case 'comments':
		$page = "comments";
		$title = "Comments";
		break;
	case 'seo':
		$page = "seo";
		$title = "Search Engine Optimization";
		break;
	case 'advertisment':
		$page = "advertisment";
		$title = "Advertisment";
		break;
	case 'users':
		$page = "user";
		$title = "Users";
		break;
	case 'gallery':
		$page = "gallery";
		$title = "Gallery";
		break;
	case 'siteconf':
		$page = "siteconf";
		$title = "Website Configurations";
		break;
	case 'editpost':
		$page = "editpost";
		$title = "Edit Product";
		break;
	case 'deletepost':
		$page = "deletepost";
		$title = "Delete Product";
		break;
	case 'editcategory':
		$page = "editcategories";
		$title = "Edit Categories";
		break;
	case 'read':
		$page = "read";
		$title = "Read Message";
		break;
	case 'deletemsg':
		$page = "deletemsg";
		$title = "Delete Message";
		break;
	case 'subscribers':
		$page = "subscribers";
		$title = "Subscribers List";
		break;
	case 'orders':
		$page = "orders";
		$title = "Orders";
		break;
	case 'customers':
		$page = "customers";
		$title = "All Customers";
		break;
	case 'payment_credentials':
		$page = "payment_credentials";
		$title = "Update Payment Gateway Credentials";
		break;		
	case 'changepassword':
		$page = "change_password";
		$title = "Change Password";
		break;
	}

?>