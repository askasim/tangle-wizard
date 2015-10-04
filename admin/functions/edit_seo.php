<?php

	function edit_seo($link,$prefix){
		$keyword=addslashes($_POST['key']);
		$des=addslashes($_POST['des']);
		$query="UPDATE ".$prefix."seo SET keywords='$keyword',des='$des' WHERE node_id=0";
		$result=mysqli_query($link, $query);
		header('location:admin/seo?success=true');
	}

?>