<?php
	
	function delete_post($link,$prefix){
		$id=addslashes($_GET['id']);
		$query="DELETE FROM ".$prefix."node WHERE id='$id'";
		$result=mysqli_query($link, $query);
		$query="DELETE FROM ".$prefix."node_meta WHERE node_id='$id'";
		$result=mysqli_query($link, $query);
		$query="DELETE FROM ".$prefix."images WHERE other_id='$id'";
		$result=mysqli_query($link, $query);
		header('location:admin/manageproduct?delete=true');
	}
	

?>