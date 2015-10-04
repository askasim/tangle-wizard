<?php
	
	include ('functions/installation.php');
	include ('../config/config.php');
	if(isset($_POST['submit_db'])){
		generate_database(); 
	}elseif(isset($_POST['submit-personal'])){
		personal_details($link,$prefix);
	}elseif(isset($_POST['submit-siteoption'])){
		site_options($link,$prefix);
	}
?>