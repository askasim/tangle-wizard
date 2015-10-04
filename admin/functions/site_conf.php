<?php

	function site_conf($link,$prefix){
		foreach ($_POST as $key => $value) {
			$val=addslashes($value);
			$query="UPDATE ".$prefix."website_option SET value='$val' WHERE option_name='$key'";
			$result=mysqli_query($link, $query);
		}
		if(!empty($_FILES['logo']['name'])){
			$query="SELECT value FROM ".$prefix."website_option WHERE id=11";
			$result=mysqli_query($link,$query);
			$data=mysqli_fetch_assoc($result);
			unlink($data['value']);
			$tmp_name = $_FILES['logo']['tmp_name'];
			$image_name=$_FILES['logo']['name'];
			$TARGET_PATH = "images/logo";
			$ext = ".";
			$ext .= pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
			$TARGET_PATH.=$ext;
			move_uploaded_file($tmp_name, $TARGET_PATH);
		}
		if(!empty($_FILES['fav']['name'])){
			$query="SELECT value FROM ".$prefix."website_option WHERE id=12";
			$result=mysqli_query($link,$query);
			$data=mysqli_fetch_assoc($result);
			unlink($data['value']);
			$tmp_name = $_FILES['fav']['tmp_name'];
			$image_name=$_FILES['fav']['name'];
			$TARGET_PATH = "images/fav";
			$ext = ".";
			$ext .= pathinfo($_FILES['fav']['name'], PATHINFO_EXTENSION);
			$TARGET_PATH.=$ext;
			move_uploaded_file($tmp_name, $TARGET_PATH);
		}
		header('location: admin/siteconf?success=true');
	}
	
	
	
?>