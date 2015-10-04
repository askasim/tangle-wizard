<?php

	function input_msg($link,$prefix){
		$name=addslashes($_POST['cf_name']);
		$email=addslashes($_POST['cf_email']);
		$sub=addslashes($_POST['cf_subject']);
		$msg=addslashes($_POST['cf_message']);
		$query="INSERT INTO `".$prefix."messages`(`title`, `email`, `subject`, `message`, `status`) 
		VALUES 
		('$name','$email','$sub','$msg','unread')";
		$result=mysqli_query($link, $query);
		header('location:contact?success=true');
	}


?>