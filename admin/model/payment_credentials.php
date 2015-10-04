 <?php
 	$error="empty";
 	if(isset($_GET['success'])){
 			$error="Sorry Your old Password Mismatched";
 		}
 ?>
 <div id='content' class='col-lg-10 col-sm-10'>
            <!-- content starts -->
 <div>
    <ul class='breadcrumb'>
        <li>
            Home
        </li>
        <li>
            Update Payment Gateway Credentials
        </li>
    </ul>
</div>
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-barcode"></i> Update Payment Gateway Credentials</h2>

            </div>
            <div class="box-content row">
            	<div style='margin-left:2%;margin-top:2%;margin-bottom:2%;' class='col-lg-7 col-md-12'>
              <?php
					if(isset($_GET['success'])){
						echo "<div class='alert alert-success' role='alert'><p>Your Credentials has been successfully Updated !!</p></div>";
					}
              $query="SELECT value FROM ".$prefix."payment_credentials WHERE id=1";
			  $d=mysqli_fetch_assoc(mysqli_query($link, $query));
			  $query="SELECT value FROM ".$prefix."payment_credentials WHERE id=2";
			  $d1=mysqli_fetch_assoc(mysqli_query($link, $query));
			  $query="SELECT value FROM ".$prefix."payment_credentials WHERE id=3";
			  $d2=mysqli_fetch_assoc(mysqli_query($link, $query));
               echo "<form role='form' action='processor.php' method='post'>
               		<div class='form-group'>
                        <label for='exampleInputEmail1'>Paypal ID</label>
                        <input type='text' name='paypal' class='form-control' value='".$d['value']."'>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputEmail1'>Authorize.net Api Key</label>
                        <input type='text' name='api' class='form-control'  value='".$d1['value']."'>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputEmail1'>Authorize.net Transaction Key</label>
                        <input type='text' name='transaction' class='form-control'  value='".$d2['value']."'>
                    </div>
                    <button type='submit' name='btn-update_payment' class='btn btn-default'>Update</button>
                </form>";
               ?>
				</div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
</div>