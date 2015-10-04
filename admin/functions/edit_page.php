<?php

	function edit_page($link,$prefix){
		$content=addslashes($_POST['editor1']);
		$query="UPDATE ".$prefix."pages SET content='$content' WHERE id=1";
		$result=mysqli_query($link, $query);
		header('location: admin/about?success=true');
	}


?>