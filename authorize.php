<?php
	include 'config/config.php';
 	if(isset($_POST['pay-credit'])){
 	require 'sdk-php-master/autoload.php';
 	$id=$_POST['id'];
	$total=$_POST['total'];
	$name=$_POST['name'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$card=$_POST['card'];
	$cvc=$_POST['cvc'];
	$qq="SELECT value FROM ".$prefix."payment_credentials WHERE name='api_key'";
	$rr=mysqli_query($link, $qq);
	$dd=mysqli_fetch_assoc($rr);
	define("AUTHORIZENET_API_LOGIN_ID", $dd['value']);
	$qq="SELECT value FROM ".$prefix."payment_credentials WHERE name='transaction_key'";
	$rr=mysqli_query($link, $qq);
	$dd=mysqli_fetch_assoc($rr);
	define("AUTHORIZENET_TRANSACTION_KEY",$dd['value']);
	define("AUTHORIZENET_SANDBOX", true);
	$sale= new AuthorizeNetAIM;
	$sale->amount   = $total;
	$sale->card_num = $card;
	$sale->exp_date = $month."/".$year;
	$response = $sale->authorizeAndCapture();
	if ($response->approved) {
	    $transaction_id = $response->transaction_id;
		$query="UPDATE ".$prefix."orders SET status='Confirmed' WHERE id='".$id."'";
		$result=mysqli_query($link, $query);
		header('location: success.php?ref='.$id);
	}else{			
		include 'card.php';
		echo "<div class='container'>
 			<div class='col-md-8'>
		<div class='alert alert-danger'>
	          Sorry Your Card Declined Please try Again
	    </div></div></div>";
		include 'js/main_js.php'; 
	}
 }else{
 	include 'config/config.php';
 	include 'card.php';
 	include 'js/main_js.php'; 
 }

 ?>