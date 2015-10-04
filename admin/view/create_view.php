<?php	
		switch($page) {
			case 'dashboard' :
				include 'model/dashboard.php';
			break;
			case 'addproduct':
				include 'model/addproduct.php';
				break;
			case 'manageproduct':
				include 'model/manageproduct.php';
				break;
			case 'categories':
				include 'model/categories.php';
				break;
			case 'pages':
				include 'model/pages.php';
				break;
			case 'addmedia':
				include 'model/addmedia.php';
				break;
			case 'managemedia':
				include 'model/managemedia.php';
				break;
			case 'messages':
				include 'model/messages.php';
				break;
			case 'comments':
				include 'model/comments.php';
				break;
			case 'seo':
				include 'model/seo.php';
				break;
			case 'advertisment':
				include 'model/advertisment.php';
				break;
			case 'users':
				include 'model/users.php';
				break;
			case 'gallery':
				include 'model/gallery.php';
				break;
			case 'siteconf':
				include 'model/siteconf.php';
				break;
			case 'editpost':
				include 'model/editpost.php';
				break;
			case 'deletepost':
				include 'model/deletepost.php';
				break;
			case 'editcategories':
				include 'model/edit_categories.php';
				break;
			case 'read':
				include 'model/read_msg.php';
				break;
			case 'deletemsg':
				include 'model/delete_msg.php';
				break;
			case 'subscribers':
				include 'model/subscribers.php';
				break;
			case 'change_password':
				include 'model/change_password.php';
				break;
			case 'orders':
				include 'model/orders.php';
				break;
			case 'customers':
				include 'model/customers.php';
				break;
			case 'payment_credentials':
				include 'model/payment_credentials.php';
				break;
			}

?>