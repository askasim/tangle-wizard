<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
           Product
        </li>
        <li>
            Add Product
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add New Product</h2>

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
						echo "<div class='alert alert-success' role='alert'><p>Your Product has been successfully Posted !!</p></div>";
					}
				?>
            	<form role="form" id="addpost" style="margin-top:1%;" action="processor.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="text" style="display: none;" class="form-control" id="postby" name="postby" value="<?php echo $username; ?>">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Please Enter Post Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Product Image</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price </label>
                        <input type="text" class="form-control" id="keywords" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity </label>
                        <input type="text" class="form-control" id="keywords" name="quantity" placeholder="Quanity">
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputEmail1">Product Description</label>
                        <textarea class="form-control" name="editor1" id="editor1">
                        </textarea>
                        <script> 
						var roxyFileman = 'fileman/index.html'; 
						$(function(){
						   CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman,
						                                filebrowserImageBrowseUrl:roxyFileman+'?type=image',
						                                removeDialogTabs: 'link:upload;image:upload'}); 
						});
						 </script>
                    </div>
                    
					<div class="form-group">
					  <label for="image">More Images</label>
					  
						<input id="imag" name="imag[]" class="input-file" type="file" multiple="true">
					  
					</div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">SEO keywords (Please specify keywords seperated by a commas) </label>
                        <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords">
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Description </label>
                        <input type="text" class="form-control" id="des" name="des" placeholder="Product Description for SEO">
                    </div>
                 <div class="form-group" style="margin-top:2%;">
					<label class="col-md-1 control-label" for="name">Category</label>  
				   <div class="col-md-4">
                        <select id="category" name="category" class="form-control" data-rel="chosen" style="cursor: pointer;">
                            <option selected="selected">Please select a category</option>
                            <?php
                            	$query="SELECT category FROM ".$prefix."categories WHERE type='parent' ORDER BY id DESC";
								$result=mysqli_query($link, $query);
								while($data=mysqli_fetch_assoc($result)){
									echo "<option value='".$data['category']."'>".ucfirst($data['category'])."</option>";
								}
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
					<label class="col-md-1 control-label" for="name">Sub Category</label>  
				   <div class="col-md-4">
                        <select id="sub" name="sub" class="form-control" style="cursor: pointer;" data-rel="chosen">
                            <option selected="selected">Please select a sub category</option>
                        </select>
                    </div>
                </div>
                
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="form-group" style="text-align: center;">
                	<button class="btn btn-success btn-lg" type="submit" id="btn-addnewpost" name="btn-addnewpost">Add Product</button>
                	<a href="admin/addpost" class="btn btn-danger btn-lg">Cancel</a>
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
    <script>
$(document).ready(function(){
	$('#category').change(function(){
		var category = $('#category').val();
			$.ajax({
				type:'post',
				url:'ajax_category.php',
				data:{parent:category},
				cache:false,
				success: function(returndata){
					$('#sub').html(returndata);
				}
			});
	})
})
</script>