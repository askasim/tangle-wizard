<?php
	
	function all_posts($link,$prefix){
		$query="SELECT * FROM ".$prefix."node ORDER BY id DESC";
		$result=mysqli_query($link, $query);
		return $result;
	}
	
	function post_meta($link,$prefix,$id){
		$query="SELECT * FROM ".$prefix."node_meta WHERE node_id='".$id."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		return $data;
	}
	
	function all_categories($link,$prefix){
		$query="SELECT * FROM ".$prefix."categories ORDER BY id ASC";
		$result=mysqli_query($link, $query);
		return $result;
	}
	
	function no_posts_categories($link,$prefix,$category){
		$query="SELECT COUNT(*) as `num` FROM ".$prefix."node_meta  WHERE category='".$category."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		return $data;
	}
	function no_posts_sub_categories($link,$prefix,$category){
		$query="SELECT COUNT(*) as `num` FROM ".$prefix."node_meta  WHERE sub_category='".$category."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		return $data;
	}

?>