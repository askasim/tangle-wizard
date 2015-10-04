<?php
	
	include 'config/config.php';
	if(isset($_POST['submit-login'])){
		include 'functions/login.php';
		$username=addslashes($_POST['username']);
		$password=addslashes($_POST['password']);
		authenticate_user($link,$prefix, $username, $password);
	}elseif(isset($_POST['btn-addnewpost'])){
		include 'admin/functions/add_post.php';
		add_post($link,$prefix);
	}elseif(isset($_POST['btn-new-category'])){
		include 'admin/functions/add_category.php';
		add_category($link,$prefix);
	}elseif(isset($_POST['btn-new-sub-category'])){
		include 'admin/functions/add_category.php';
		add_sub_category($link,$prefix);
	}elseif(isset($_POST['btn-editpost'])){
		include 'admin/functions/edit_post.php';
		edit_post($link,$prefix);
	}elseif(isset($_POST['btn-deletepost'])){
		include 'admin/functions/delete_post.php';
		delete_post($link,$prefix);
	}elseif(isset($_GET['delete'])){
		include 'admin/functions/delete_post.php';
		delete_post($link,$prefix);
	}elseif(isset($_GET['managecat'])){
		include 'admin/functions/manage_category.php';
		if(isset($_POST['btn-edit-category'])){
			edit_category($link, $prefix);
		}elseif(isset($_POST['btn-transfer-category'])){
			transfer_category($link, $prefix);
		}elseif(isset($_GET['id'])){
			delete_category($link, $prefix);
		}
	}elseif(isset($_POST['btn-msg'])){
		include 'functions/misc_func.php';
		input_msg($link,$prefix);
	}elseif(isset($_POST['btn-editpage'])){
		include 'admin/functions/edit_page.php';
		edit_page($link,$prefix);
	}elseif(isset($_POST['btn-editseo'])){
		include 'admin/functions/edit_seo.php';
		edit_seo($link,$prefix);
	}elseif(isset($_POST['btn-siteconf'])){
		include 'admin/functions/site_conf.php';
		site_conf($link,$prefix);
	}elseif(isset($_POST['btn-changepassword'])){
		include 'admin/functions/change_password.php';
		change_password($link,$prefix);
	}elseif(isset($_POST['btn-update_payment'])){
		include 'admin/functions/update_payment.php';
		update_payment($link,$prefix);
	}
?>