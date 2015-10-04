<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
<div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
            <a href="admin/dashboard">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
	
	 <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" >
            <i class="glyphicon glyphicon-calendar"></i>

            <div>Date</div>
            <div>
            <?php 
            	echo date("d/m/Y")." ";
				echo date("h:i a");
			?>
			</div>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
    	<?php
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."node";
				$r = mysqli_query($link, $q);
				$d=mysqli_fetch_assoc($r);
		?>
        <a data-toggle="tooltip" title="<?php echo $d['num']." Articles"; ?>" class="well top-block">
            <i class="glyphicon glyphicon-list blue"></i>

            <div>Total Posts</div>
            <div><?php echo $d['num']." Articles"; ?></div>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block">
            <i class="glyphicon glyphicon-tasks"></i>

            <div>Subscriber List</div>
            <div>
			<?php
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."newsletter";
				$r = mysqli_query($link, $q);
				$d=mysqli_fetch_assoc($r);
			?>
			</div>
			<div><?php echo $d['num']." Subscribers"; ?></div>
        </a>
    </div>
    
    <?php
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."messages WHERE status='0'";
				$r = mysqli_query($link, $q);
				$d=mysqli_fetch_assoc($r);
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."messages";
				$r = mysqli_query($link, $q);
				$d1=mysqli_fetch_assoc($r);
	?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php echo $d['num']." new messages."; ?>" class="well top-block">
			<i class="glyphicon glyphicon-calendar"></i>
			<?php
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."messages WHERE status='0'";
				$r = mysqli_query($link, $q);
				$d=mysqli_fetch_assoc($r);
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."messages";
				$r = mysqli_query($link, $q);
				$d1=mysqli_fetch_assoc($r);
			
	           	echo" <div>Messages</div>
	            <div>".$d1['num']."</div>
	            <span class='notification red'>".$d['num']."";
            ?>
        </a>
    </div>
</div>

<div class="row">
	
	
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-star-empty"></i> Quick Links</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                    <ul class="dashboard-list">
                        <li><a href="admin/dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
						<li><a href="admin/addproduct"><i class="glyphicon glyphicon-pencil"></i> Add Product</a></li>
                        <li><a href="admin/manageproduct"><i class="glyphicon glyphicon-edit"></i> Manage Products</a></li>
                        <li><a href="admin/categories"><i class="glyphicon glyphicon-pushpin"></i> Categories</a>
                        </li>
                        <li><a href="admin/orders"><i
                                    class="glyphicon glyphicon-list"></i> Orders</a></li>
                                    <li><a href="admin/customers"><i
                                    class="glyphicon glyphicon-user"></i> Customers</a></li>
                                    <li><a href="admin/payment_credentials"><i
                                    class="glyphicon glyphicon-book"></i> Payment Credentials</a></li>
                                <li><a href="admin/about"><i class="glyphicon glyphicon-pencil"></i> About</a></li>
                        </li>
                        <li><a href="admin/messages"><i
                                    class="glyphicon glyphicon-envelope"></i> Messages</a></li>
                        <li><a href="admin/subscribers"><i
                                    class="glyphicon glyphicon-user"></i> Subscriber List</a></li>
                        <li><a href="admin/seo"><i
                                    class="glyphicon glyphicon-magnet"></i> SEO</a></li>
                        <li><a href="admin/siteconf"><i class="glyphicon glyphicon-cog"></i> Site Configurations</a>
                        </li>
                        <li><a href="admin/changepassword"><i class="glyphicon glyphicon-asterisk"></i> Change Password</a>
                        </li>
                     </ul>
                </div>
            </div>
    </div>

    

</div><!--/row-->

<div class="row">
    
</div><!--/row-->
</div><!--/#content.col-md-0-->
</div>
