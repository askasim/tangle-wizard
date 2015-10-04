<?php
		$query="DELETE FROM ".$prefix."messages WHERE id='".$_GET['id']."'";
		$result=mysqli_query($link, $query);
		header('location:delete_msg.php');
?>