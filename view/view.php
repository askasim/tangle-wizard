<?php	
	switch($page) {
		case 'home' :
			include 'model/home.php';
		break;
		case 'category' :
			include 'model/category.php';
		break;
		case 'about' :
			include 'model/about.php';
		break;
		case 'contact' :
			include 'model/contact.php';
		break;
		case 'cart' :
			include 'model/cart.php';
			break;
		case 'checkout' :
			include 'model/checkout.php';
		break;
		case 'support' :
			include 'model/support.php';
		break;
		case 'user_details' :
			include 'model/user_details.php';
		break;
		case 'pay' :
			include 'model/pay.php';
		break;
		case 'success' :
			include 'model/success.php';
		break;
		case 'product' :
			$query="SELECT id FROM ".$prefix."node_meta WHERE permalink='".$path['call_parts'][0]."'";
			$result=mysqli_query($link, $query);
			$row=mysqli_num_rows($result);
			if($row==1){
				include 'model/product.php';
				echo "<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-540c6ffa765f6376'></script>";
			}else{
				include 'model/404.php';
			}
		break;
		
}

?>