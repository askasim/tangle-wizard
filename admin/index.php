<?php
session_start();
if (!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
        header("Location: ../login.php");
        exit();
}
$id=$_SESSION['sess_user_id'];
$username=$_SESSION['sess_username'];

    include 'controller/setup.php';
    include '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../css/admin_meta.php';?>
</head>

<body>
    	 <!-- start: Navigation -->
		<?php include 'controller/navigation.php'; ?>
     
     	
     	<!-- create view -->
     	<?php 
     	
     		require 'view/create_view.php'; 
     		include '../js/admin_js.php';
     	?>
</body>
</html>
