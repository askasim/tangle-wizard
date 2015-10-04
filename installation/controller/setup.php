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
		$page = "welcome";
		$title = "Welcome";
		break;
	case 'welcome' :
		$page = "welcome";
		$title = "Welcome";
		break;
	case 'database' :
		$page = "database";
		$title = "Database";
		break;
	case 'personal':
		$page = "personal";
		$title = "Personal Information";
		break;
	case 'siteoptions':
		$page = "siteoptions";
		$title = "Website Options";
		break;
	case 'finish':
		$page = "finish";
		$title = "Finish Setup";
		break;
}
?>