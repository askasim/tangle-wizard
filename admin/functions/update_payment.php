<?php

	function update_payment($link,$prefix){
		$paypal=addslashes($_POST['paypal']);
		$api=addslashes($_POST['api']);
		$transaction=addslashes($_POST['transaction']);
		$query="UPDATE ".$prefix."payment_credentials SET value='$paypal' WHERE id=1";
		$result=mysqli_query($link, $query);
		$query="UPDATE ".$prefix."payment_credentials SET value='$api' WHERE id=2";
		$result=mysqli_query($link, $query);
		$query="UPDATE ".$prefix."payment_credentials SET value='$transaction' WHERE id=3";
		$result=mysqli_query($link, $query);
		header('location:admin/payment_credentials?success=true');
	}

?>