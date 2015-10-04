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
            Change Password
        </li>
    </ul>
</div>
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-barcode"></i> Change Password</h2>

            </div>
            <div class="box-content row">
            	<div style='margin-left:2%;margin-top:2%;margin-bottom:2%;' class='col-lg-7 col-md-12'>
              <?php
			if($error=="empty"){
				
			}else{
				echo " <p><b style='color:red;'>".$error.".</b></p>";
			}
               echo "<form role='form' action='processor.php' method='post'>
               		<div class='form-group'>
                        <label for='exampleInputEmail1'>Old Password</label>
                        <input type='password' name='old' class='form-control'  Placeholder='Type Current password'>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputEmail1'>New Password</label>
                        <input type='password' name='password' class='form-control'  Placeholder='Enter new password'>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputEmail1'>Retype Password</label>
                        <input type='password' name='password1' class='form-control'  Placeholder='retype password'>
                    </div>
                    <button type='submit' name='btn-changepassword' class='btn btn-default'>Update</button>
                </form>";
                
               ?>
				</div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
</div>