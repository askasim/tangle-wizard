<?php

		function add_post($link,$prefix){
			$title=addslashes($_POST['title']);
			$temp=remove_special_character($title);
			$permalink = make_permalink($temp);
			$temp =$permalink;
			$postedby=addslashes($_POST['postby']);
			$content=addslashes($_POST['editor1']);
			$category=addslashes($_POST['category']);
			$sub_category=addslashes($_POST['sub']);
			$price=addslashes($_POST['price']);
			$quantity=addslashes($_POST['quantity']);
			if($sub_category=="Please select a sub category"){
				$sub_category="";
			}
			$keywords=addslashes($_POST['keywords']);
			$des=addslashes($_POST['des']);
			$query="INSERT INTO ".$prefix."node (`title`, `content`) VALUES ('$title','$content')";
			$result=mysqli_query($link, $query);
			$lastid=mysqli_insert_id($link);
			$query="INSERT INTO ".$prefix."node_meta (`node_id`, `permalink`, `Parent`, `category`,`sub_category`, `status`, `posted_by`,`price`,`quantity`)
				VALUES 
			('$lastid','$permalink','$category','$category','$sub_category','active','$postedby','$price','$quantity')";
			$result=mysqli_query($link, $query);
			$query="INSERT INTO `".$prefix."seo`(`node_id`, `keywords`,`des`) VALUES ('$lastid','$keywords','$des')";
			$result=mysqli_query($link, $query);
			if(!empty($_FILES['image']['name'])){
				$tmp_name = $_FILES['image']['tmp_name'];
				$image_name=$_FILES['image']['name'];
				$TARGET_PATH = "fileman/Uploads/Images/";
				$ext = ".";
				$ext .= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
				$TARGET_PATH.= $temp;
				$TARGET_PATH.= $ext;
				move_uploaded_file($tmp_name, $TARGET_PATH);
				$query="INSERT INTO ".$prefix."images (`other_id`, `type`, `path`) 
				VALUES 
				('$lastid','image','$TARGET_PATH')";
				$result=mysqli_query($link, $query);
			}else{
				$query="INSERT INTO ".$prefix."images (`other_id`, `type`, `path`) 
				VALUES 
				('$lastid','image','fileman/Uploads/Images/Default.jpg')";
				$result=mysqli_query($link, $query);
				$query="INSERT INTO ".$prefix."images (`other_id`, `type`, `path`) 
				VALUES 
				('$lastid','big_thumb','fileman/Uploads/Images/Default_B_thumb.jpg')";
				$result=mysqli_query($link, $query);
				$query="INSERT INTO ".$prefix."images (`other_id`, `type`, `path`) 
				VALUES 
				('$lastid','small_thumb','fileman/Uploads/Images/Default_S_thumb.jpg')";
				$result=mysqli_query($link, $query);
			}
			if(!empty($_FILES['imag']['name'])){
			$count = 0;
				foreach ($_FILES["imag"]["name"] as $key => $error) {
						
							$tmp_name = $_FILES["imag"]["tmp_name"][$key];
							$TARGET_PATH = "fileman/Uploads/Images/";
							$ext = ".";
							$ext .= pathinfo($_FILES["imag"]["name"][$key], PATHINFO_EXTENSION);
							$image_name = $temp."_$count";
							$TARGET_PATH .= $image_name.$ext;
							move_uploaded_file($tmp_name,$TARGET_PATH); 
							$query="INSERT INTO ".$prefix."images (`other_id`, `type`, `path`) 
							VALUES 
							('$lastid','moreimages','$TARGET_PATH')";
							$result=mysqli_query($link, $query);
							$count++;
							}
						
				}
				header("Location: admin/addproduct?success=true");
		}
		
		
		function resize($filename,$width, $height,$path,$ext){
			  /* Get original image x y*/
			  list($w, $h) = getimagesize($filename);
			  /* calculate new image size with ratio */
			  $ratio = max($width/$w, $height/$h);
			  $h = ceil($height / $ratio);
			  $x = ($w - $width / $ratio) / 2;
			  $w = ceil($width / $ratio);
			  /* new file name */
			  
			  /* read binary data from image file */
			  $imgString = file_get_contents($filename);
			  /* create image from string */
			  $image = imagecreatefromstring($imgString);
			  $tmp = imagecreatetruecolor($width, $height);
			  imagecopyresampled($tmp, $image,
			    0, 0,
			    $x, 0,
			    $width, $height,
			    $w, $h);
			  /* Save image */
			  $path.=$ext;
			  if ($ext == "gif"){ 
			        imagegif($tmp, $path);
			    } else if($ext =="png"){ 
			        imagepng($tmp, $path);
			    } else { 
			        imagejpeg($tmp, $path, 84);
			    }
				/* cleanup memory */
			  imagedestroy($image);
			  imagedestroy($tmp);
			  return $path;
	}

	function make_permalink($tempperm) {
		$permalink = "";
		$tempperm = str_replace(' ', '-', $tempperm);
		$permalink .= $tempperm;
		return $permalink;
	}
	
	
	function remove_special_character($temp){
		$temp=preg_replace('/[^A-Za-z0-9\-]/', ' ', $temp);
		$temp = preg_replace('/\s+/', ' ',$temp);
		$temp =str_replace(" - "," ",$temp);
		$temp=trim($temp);
		return $temp;
	}


?>