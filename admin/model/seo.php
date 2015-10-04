<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
           SEO
        </li>
        <li>
            Manage SEO
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Manage SEO</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
            	<?php
					if(isset($_GET['success'])){
						echo "<div class='alert alert-success' role='alert'><p>Your SEO Has Been Successfully Updated !!</p></div>";
					}
				?>
            	<form role="form" id="addpost" style="margin-top:1%;" action="processor.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php
                    	$query="SELECT * FROM ".$prefix."seo WHERE node_id=0";
						$data=mysqli_fetch_assoc(mysqli_query($link, $query));
                    ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords(seprated by commas)</label>
                        <input type="text" class="form-control" id="key" name="key" value="<?php echo $data['keywords'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" id="des" name="des" value="<?php echo $data['des'] ?>">
                    </div>
                
                <br/>
                <div class="form-group" style="text-align: center;">
                	<button class="btn btn-success btn-lg" type="submit" id="btn-editseo" name="btn-editseo">Update</button>
                	<a href="admin/dashboard" class="btn btn-danger btn-lg">Cancel</a>
                </div>
				</form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->


