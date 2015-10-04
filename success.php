 <?php
 	include 'config/config.php';	
	$cookie_name='cart';
	unset($_COOKIE[$cookie_name]);
	setcookie($cookie_name, '', time() - 3600,'/');
	if(isset($_POST['id'])){
		$id=addslashes($_POST['id']);
		$query="SELECT node_id,quantity FROM ".$prefix."order_product WHERE order_id='".$id."'";
		$result=mysqli_query($link, $query);
		while($data=mysqli_fetch_assoc($result)){
			$q="UPDATE ".$prefix."node_meta SET quantity = quantity-".$data['quantity']." WHERE node_id= '".$data['node_id']."'";
			$res=mysqli_query($link, $q);
		}
	}else{
		$id=addslashes($_GET['ref']);
		$query="SELECT node_id,quantity FROM ".$prefix."order_product WHERE order_id='".$id."'";
		$result=mysqli_query($link, $query);
		while($data=mysqli_fetch_assoc($result)){
			$q="UPDATE ".$prefix."node_meta SET quantity = quantity-".$data['quantity']." WHERE node_id= '".$data['node_id']."'";
			$res=mysqli_query($link, $q);
		}
	}
	header('location: success');
?>