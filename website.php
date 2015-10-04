<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
	<?php 
    include 'config/config.php';
    include 'controller/setup.php';
	include 'functions/site_meta.php';
	include 'functions/more_meta.php';
     ?>
	</head>
<body class="ecommerce">
		
		 <!-- start: Navigation -->
	     <?php include 'controller/navigation.php'; ?>
	     <!-- create view -->	     
	     <?php include 'view/view.php'; ?>
	     
	     	
	     <?php
	     	include 'model/footer.php';
			include 'js/main_js.php'; 
				 	
		 ?>
	</body>
	
</html>