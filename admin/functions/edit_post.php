<?php

		function edit_post($link,$prefix){
			$id=addslashes($_POST['id']);
			$lastid=$id;
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
			$keyword=addslashes($_POST['keywords']);
			$des=addslashes($_POST['des']);
			$query="UPDATE ".$prefix."seo SET keywords='$keyword',des='$des' WHERE node_id='$id'";
			$result=mysqli_query($link, $query);
			$query="UPDATE ".$prefix."node SET `title`='$title',`content`='$content' WHERE id='$id'";
			$result=mysqli_query($link,$query);
			$query="UPDATE ".$prefix."node_meta SET `permalink`='$permalink',`Parent`='$category',`category`='$category',`sub_category`='$sub_category',
					`price`='$price',`quantity`='$quantity' WHERE node_id='$id'";
			$result=mysqli_query($link,$query);
			if(!empty($_FILES['image']['name'])){
				$query="SELECT path FROM ".$prefix."images WHERE other_id='".$id."' AND type='image'";
				$result=mysqli_query($link,$query);
				while($data=mysqli_fetch_assoc($result)){
					unlink($data['path']);
				}
				if(mysqli_num_rows($result)!=0){
					$tmp_name = $_FILES['image']['tmp_name'];
					$image_name=$_FILES['image']['name'];
					$TARGET_PATH = "fileman/Uploads/Images/";
					$ext = ".";
					$ext .= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$TARGET_PATH.= $temp;
					$TARGET_PATH.= $ext;
					move_uploaded_file($tmp_name, $TARGET_PATH);
					$query="UPDATE `".$prefix."images` SET path='$TARGET_PATH' WHERE other_id='$id' AND type='image'";
					$result=mysqli_query($link, $query);	
				}else{
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
				}
			}
			$noFile = $_FILES['imag']['size'][0] === 0 && $_FILES['imag']['tmp_name'][0] === '';
			if(!$noFile){
				$count =rand();
					foreach ($_FILES["imag"]["tmp_name"] as $key => $error) {
							
								$tmp_name = $_FILES["imag"]["tmp_name"][$key];
								$TARGET_PATH = "fileman/Uploads/Images/";
								$ext = ".";
								$ext .= pathinfo($_FILES["imag"]["tmp_name"][$key], PATHINFO_EXTENSION);
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
				header("Location: admin/manageproduct?edit=true");
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