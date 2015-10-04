<?php

	function edit_category($link, $prefix){
		$id=addslashes($_POST['id']);	
		$category=addslashes($_POST['category']);
		$old=addslashes($_POST['old']);
		$query="SELECT category,type FROM ".$prefix."categories";
		$result=mysqli_query($link, $query);
		$isthere=0;
		while($data=mysqli_fetch_assoc($result)){
			if(strcmp($data['category'],$category)==0){
				$isthere=1;
			}
		}
		if($isthere==1){
			header("Location: admin/categories?edit=false");
		}else{
		$templink=explode(" ",$category);
			$weblink=$templink[0];
			$i=0;
			foreach ($templink as $key => $value) {
				if($i==0){
				}else{
					$weblink.="_".$value;
				}
				$i++;
			}
		$query="SELECT type FROM ".$prefix."categories WHERE category='$old'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		if(strcmp($data['type'],"parent")==0){
			$query="UPDATE ".$prefix."categories SET category='$category',link='$weblink' WHERE id='$id'";
			$result=mysqli_query($link, $query);
			$query="UPDATE ".$prefix."categories SET parent='$category' WHERE parent='$old'";
			$result=mysqli_query($link, $query);
		}else{
			$query="UPDATE ".$prefix."categories SET category='$category',link='$weblink' WHERE id='$id'";
			$result=mysqli_query($link, $query);
		}
		$query="UPDATE ".$prefix."node_meta SET category='$category',parent='$category' WHERE category='$old'";
		$result=mysqli_query($link, $query);
		header('location:admin/categories?edit=true');
		}
	}
	function transfer_category($link, $prefix){
		$id=addslashes($_POST['id']);	
		$category=addslashes($_POST['new']);
		$old=addslashes($_POST['old']);
		$query="DELETE FROM ".$prefix."categories WHERE id='$id'";
		$result=mysqli_query($link, $query);
		$query="UPDATE ".$prefix."node_meta SET category='$category',parent='$category' WHERE category='$old'";
		$result=mysqli_query($link, $query);
		header('location:admin/categories?transfer=true');
	}
	function delete_category($link, $prefix){
		$id=addslashes($_GET['id']);
		$query="SELECT category FROM ".$prefix."categories WHERE id='".$id."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);	
		$query="DELETE FROM ".$prefix."categories WHERE id='$id'";
		$result=mysqli_query($link, $query);
		$query="SELECT node_id FROM ".$prefix."node_meta WHERE category='".$data['category']."'";
		$result=mysqli_query($link, $query);
		while($data=mysqli_fetch_assoc($result)){
			$query="DELETE FROM ".$prefix."node WHERE id='".$data['node_id']."'";
			$res=mysqli_query($link, $query);
			$query="DELETE FROM ".$prefix."node_meta WHERE node_id='".$data['node_id']."'";
			$res=mysqli_query($link, $query);
			$query="DELETE FROM ".$prefix."images WHERE other_id='".$data['node_id']."'";
			$res=mysqli_query($link, $query);
		}
		header('location:admin/categories?delete=true');
	}


?>