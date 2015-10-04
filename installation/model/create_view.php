<?php	
		switch($page) {
		case 'welcome' :
			include 'view/welcome.php';
		break;
		case 'database' :
			include 'view/database.php';
		break;
		case 'personal':
			include 'view/personal.php';
			break;
		case 'siteoptions':
			include 'view/siteoption.php';
			break;
		case 'finish':
			include 'view/finish.php';
			break;
	}

?>