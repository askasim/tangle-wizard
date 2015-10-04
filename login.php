<?php
session_start();
if (isset($_SESSION['sess_user_id'])) {
        header('location: admin/dashboard');
        exit();
}
	include 'config/config.php';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'css/login_meta.php';?>
</head>

<body>
<div class="container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header" style='margin-top:5%;'>
            <h2>Welcome to <?php echo ucfirst($website); ?></h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal" action="processor.php" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" name="submit-login" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
            <?php 
            if(isset($_GET['wronguser'])){
	           echo "<div class='alert alert-danger'>
	                Sorry Your Username or Password is Wrong</br>
	                You can request a new one from <a href='www.tanglewizard.com'>Tangle Wizard Support </a>
	            </div>";
	       }
            ?>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->
</body>
</html>