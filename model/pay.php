<div class="breadcrumb">
      <div class="container">
        <div>
          <span><a href="home">Home</a></span> / Confirm Order
        </div>
      </div>
    </div>
<div class="content">
      <div class="container">
      	<div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="section text_post_block">
              <h2 class="section_title section_title_big">Confirm Order</h2>
      	<div class='alert alert-info'>
	                Your Order Is almost Processed Just Confirm it now
	            </div>
<?php
	if(isset($_POST['btn-old-user'])){
			$email=addslashes($_POST['email']);
			$password=addslashes($_POST['password']);
			$query="SELECT * FROM ".$prefix."customers WHERE email='".$email."'";
			$result=mysqli_query($link, $query);
			$data=mysqli_fetch_assoc($result);
			if($data['password']==$password){
			$name=$data['name'];
			$email=$data['email'];
			$telephone=$data['telephone'];
			$address1=$data['address'];
			$city=$data['city'];
			$state=$data['state'];
			$post=$data['postcode'];
			$country=$data['country'];
			$total=addslashes($_POST['total']);
			$query="INSERT INTO `".$prefix."orders`(`status`) VALUES ('not confirmed')";
			$result=mysqli_query($link, $query);
			$last_id=mysqli_insert_id($link);
			$query="INSERT INTO `".$prefix."orders_meta`(`order_id`, `name`, `email`, `telephone`, `address`, `city`, `state`, `post`, `country`, `payment_type`, `total`) 
			VALUES 
			('$last_id','$name','$email','$telephone','$address1','$city','$state','$post','$country','returning customer','$total')";
			$result=mysqli_query($link, $query);
			$cart=$_COOKIE['cart'];
			$newcart=explode("-", $cart);
			$item;
			foreach ($newcart as $key => $value) {
			$item=explode(",", $value);
			$node_id=$item[0];
			$quantity=$item[1];
			$query="INSERT INTO `".$prefix."order_product`(`order_id`, `node_id`,`quantity`) 
			VALUES
			 ('$last_id','$node_id','$quantity')";
			 $result=mysqli_query($link, $query);
			 }
			
				echo "<div class='container'>
				<div ='row'>
				<h2>How You want to Pay ?<h2>
				<div class='col-md-4'>
				<form method='post' action='success.php'>
				<legend>Cash on Delivery</legend>
				<input type='text' name='id' style='display:none;' value='".$last_id."' />
				<button class='btn btn-primary pull-left' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
				</form>
				</div>
				<div class='col-md-4'>
				<form method='post' action='paypal.php'>
				<legend>Paypal</legend>
				<input type='text' style='display:none;' name='total' value='".$total."' />
				<input type='text' name='id' style='display:none;' value='".$last_id."' />
				<button class='btn btn-primary pull-left' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
				</form>
				</div>
				<div class='col-md-4'>
				<form method='post' action='authorize.php'>
				<legend>Credit Card</legend>
				<input type='text' style='display:none;' name='total' value='".$total."' />
				<input type='text' style='display:none;' name='id' value='".$last_id."' />
				<button class='btn btn-primary pull-left' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
				</form>
				</div>
				</div>
				</div>";
				}else{
					echo "<div class='alert alert-danger'>
	                Your login credentials are wrong
	            	</div>";
				}
	}elseif(isset($_POST['btn-pay'])){
		if(($_POST['account_type'])=='register'){
			$name=addslashes($_POST['name']);
			$email=addslashes($_POST['email']);
			$telephone=addslashes($_POST['telephone']);
			$password=addslashes($_POST['password']);
			$address1=addslashes($_POST['address1']);
			$city=addslashes($_POST['city']);
			$state=addslashes($_POST['state']);
			$post=addslashes($_POST['post-code']);
			$country=addslashes($_POST['country']);
			$payment_type=addslashes($_POST['payment_type']);
			$total=addslashes($_POST['total']);
			$query="INSERT INTO `".$prefix."customers`(`name`, `email`, `telephone`, `password`, `address`, `city`, `state`, `postcode`, `country`) 
			VALUES 
			('$name','$email','$telephone','$password','$address1','$city','$state','$post','$country')";
			$result=mysqli_query($link, $query);
			$last_id=mysqli_insert_id($link);
			$query="INSERT INTO `".$prefix."orders`(`user_id`, `status`) VALUES ('$last_id','not confirmed')";
			$result=mysqli_query($link, $query);
			$last_id=mysqli_insert_id($link);
			$query="INSERT INTO `".$prefix."orders_meta`(`order_id`, `name`, `email`, `telephone`, `address`, `city`, `state`, `post`, `country`, `payment_type`, `total`) 
			VALUES 
			('$last_id','$name','$email','$telephone','$address1','$city','$state','$post','$country','$payment_type','$total')";
			$result=mysqli_query($link, $query);
			$cart=$_COOKIE['cart'];
			$newcart=explode("-", $cart);
			$item;
			foreach ($newcart as $key => $value) {
			$item=explode(",", $value);
			$node_id=$item[0];
			$quantity=$item[1];
			$query="INSERT INTO `".$prefix."order_product`(`order_id`, `node_id`,`quantity`) 
			VALUES
			 ('$last_id','$node_id','$quantity')";
			 $result=mysqli_query($link, $query);
			 }
				if($payment_type=='CashOnDelivery'){
					echo "<form method='post' action='success.php'>
					<input type='text' name='id' style='display:none;' value='".$last_id."' />
					<button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
					</form>";
				}elseif($payment_type=='paypal'){
					echo "<form method='post' action='paypal.php'>
					<input type='text' style='display:none;' name='total' value='".$total."' />
					<input type='text' name='id' style='display:none;' value='".$last_id."' />
					<button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
					</form>";
				}else{
					echo "<form method='post' action='authorize.php'>
					<input type='text' style='display:none;' name='total' value='".$total."' />
					<input type='text' style='display:none;' name='id' value='".$last_id."' />
					<button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
					</form>";
				}
			}else{
			$name=addslashes($_POST['firstname-dd']);
			$email=addslashes($_POST['email-dd']);
			$telephone=addslashes($_POST['telephone-dd']);
			$address1=addslashes($_POST['address1-dd']);
			$city=addslashes($_POST['city-dd']);
			$state=addslashes($_POST['state-dd']);
			$post=addslashes($_POST['post-dd']);
			$country=addslashes($_POST['country-dd']);
			$payment_type=addslashes($_POST['payment_type']);
			$total=addslashes($_POST['total']);
			$query="INSERT INTO `".$prefix."orders`(`status`) VALUES ('not confirmed')";
			$result=mysqli_query($link, $query);
			$last_id=mysqli_insert_id($link);
			$query="INSERT INTO `".$prefix."orders_meta`(`order_id`, `name`, `email`, `telephone`, `address`, `city`, `state`, `post`, `country`, `payment_type`, `total`) 
			VALUES 
			('$last_id','$name','$email','$telephone','$address1','$city','$state','$post','$country','$payment_type','$total')";
			$result=mysqli_query($link, $query);
			$cart=$_COOKIE['cart'];
			$newcart=explode("-", $cart);
			$item;
			foreach ($newcart as $key => $value) {
			$item=explode(",", $value);
			$node_id=$item[0];
			$quantity=$item[1];
			$query="INSERT INTO `".$prefix."order_product`(`order_id`, `node_id`,`quantity`) 
			VALUES
			 ('$last_id','$node_id','$quantity')";
			 $result=mysqli_query($link, $query);
			 }
			if($payment_type=='CashOnDelivery'){
				echo "<form method='post' action='success.php'>
				<input type='text' name='id' style='display:none;' value='".$last_id."' />
				<button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
				</form>";
			}elseif($payment_type=='paypal'){
				echo "<form method='post' action='paypal.php'>
				<input type='text' style='display:none;' name='total' value='".$total."' />
				<input type='text' name='id' style='display:none;' value='".$last_id."' />
				<button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
				</form>";
			}else{
				echo "<form method='post' action='authorize.php'>
				<input type='text' style='display:none;' name='total' value='".$total."' />
				<input type='text' style='display:none;' name='id' value='".$last_id."' />
				<button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
				</form>";
			}
			
		}
	}

?>
	<div class="clearfix" style='margin-bottom:100px;'></div>
			</div>
          </div>
        </div>
      </div>
    </div>
</div>
   </div>
