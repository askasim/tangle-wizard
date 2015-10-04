<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
            Manage Product
        </li>
        <?php
       	    $query="SELECT * FROM ".$prefix."node WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data1=mysqli_fetch_assoc($result);
			$query="SELECT permalink FROM ".$prefix."node_meta WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data2=mysqli_fetch_assoc($result);
			echo "<li class='active'>
            <a href='#'>".ucwords($data1['title'])."</a>
        	</li>";
        ?>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-remove"></i> Delete Product</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
            	<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Do You Really Want to Delete Product ...?</strong><br/><br/><a href="<?php echo $data2['permalink']; ?>" target="_blank"><?php echo ucwords($data1['title']); ?></a>
                </div>
                <div style="text-align: center;">
                <a class='btn btn-success' href='processor.php?delete=yes&id=<?php echo $_GET['id'] ;?>'>
                <i class='glyphicon glyphicon glyphicon-ok'></i>
                Yes
	            </a>
	            <a class='btn btn-danger' href='admin/manageposts'>
	                <i class='glyphicon glyphicon-trash icon-white'></i>
	                No
	            </a>
	            </div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->