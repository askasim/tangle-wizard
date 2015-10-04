<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
            <a href="admin/about">About</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-leaf"></i> Manage Pages </h2>
                

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
	              		echo"<div class='alert alert-success fade in'>
						    <strong>Success!</strong> Your page has been sent Updated.
						</div>";
              		}
            		$query="SELECT content FROM ".$prefix."pages WHERE id=1";
					$data=mysqli_fetch_assoc(mysqli_query($link, $query));
            	?>
            	<form role="form" style="margin-top:1%;" action="processor.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
            		
                    <div class="form-group">
                    	<label for="exampleInputEmail1">Page Content</label>
                        <textarea class="form-control" name="editor1" id="editor1"><?php echo $data['content'] ?></textarea>
                        <script> 
						var roxyFileman = 'fileman/index.html'; 
						$(function(){
						   CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman,
						                                filebrowserImageBrowseUrl:roxyFileman+'?type=image',
						                                removeDialogTabs: 'link:upload;image:upload'}); 
						});
						 </script>
                    </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="form-group" style="text-align: center;">
                	<button class="btn btn-success btn-lg" type="submit" id="btn-editpage" name="btn-editpage">Update</button>
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

