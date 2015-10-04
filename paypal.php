<!DOCTYPE html>
<html lang="en">
  <head>
   <script type="text/javascript">
			function formAutoSubmit () {
			var frm = document.getElementById("myform");
			frm.submit();
			}
			window.onload = formAutoSubmit;
			</script>
  </head>
  <body>
  	<?php
  		include 'config/config.php';
		$names=array("title","slider","url");
		$value=array();
		$i=0;
		while($i<3){
			$query="SELECT value FROM ".$prefix."website_option WHERE option_name='".$names[$i]."'";
			$result=mysqli_query($link, $query);
			$data=mysqli_fetch_assoc($result);
			$value[$i]=$data['value'];
			$i++;
		}
		$url=$value[2];
		include 'config/config.php';
		$qq="SELECT value FROM ".$prefix."payment_credentials WHERE name='paypal'";
		$rr=mysqli_query($link, $qq);
		$dd=mysqli_fetch_assoc($rr);
		$paypal_url='https://www.paypal.com/cgi-bin/webscr';
		$paypal_id=$dd['value']; // Business email ID
		?>
			
	    <form action="<?php echo $paypal_url; ?>" method="post" id='myform' name="frmPayPal1">
	    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
	    <input type="hidden" name="cmd" value="_xclick">
	    <input type="hidden" name="item_name" value="Payment for Products ">
	    <input type="hidden" name="item_number" value="1">
	    <input type="hidden" name="credits" value="510">
	    <input type="hidden" name="userid" value="1">
	    <input type="hidden" name="amount" value="<?php echo $_POST['total']; ?>">
	    <input type="hidden" name="no_shipping" value="1">
	    <input type="hidden" name="currency_code" value="USD">
	    <input type="hidden" name="handling" value="0">
	    <input type="hidden" name="cancel_return" value="<?php echo $url."/cancel"; ?>">
	    <input type="hidden" name="return" value="<?php echo $url."/success.php?ref=".$_POST['id']; ?>">
	    </form> 
	    </body>
	    </html>