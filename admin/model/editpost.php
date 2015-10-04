<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
            Products
        </li>
        <?php
       	    $query="SELECT * FROM ".$prefix."node WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data1=mysqli_fetch_assoc($result);
        	$query="SELECT * FROM ".$prefix."node_meta WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data2=mysqli_fetch_assoc($result);
			$query="SELECT * FROM ".$prefix."seo WHERE node_id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data4=mysqli_fetch_assoc($result);
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
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Product</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
            	<form role="form" style="margin-top:1%;" action="processor.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
            		<input type="text" style="display: none;" class="form-control" id="postby" name="postby" value="<?php echo $username; ?>">                   
                   <input style="display: none;" type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $data1['title']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Update Product Image</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <?php 
                    
                    	$query="SELECT path FROM ".$prefix."images WHERE other_id='".$_GET['id']."' AND type='image'";
						$result=mysqli_query($link, $query);
						$data3=mysqli_fetch_assoc($result);
                   		echo "<img src='".$data3['path']."' style='margin-bottom:5px;max-width:10%;'>";	
				    ?>
				    <div class="form-group">
                        <label for="exampleInputEmail1">Price </label>
                        <input type="text" class="form-control" id="keywords" name="price" placeholder="Price" value="<?php echo $data2['price']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity </label>
                        <input type="text" class="form-control" id="keywords" name="quantity" placeholder="Quanity" value="<?php echo $data2['quantity']; ?>" >
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputEmail1">Product Description</label>
                        <textarea class="form-control" name="editor1" id="editor1"><?php echo $data1['content'] ?></textarea>
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
						  <label  for="image">Images</label>
							<input id="imag" name="imag[]" class="input-file" type="file" multiple="true">
						</div>
						<?php 
		                  	$d = mysqli_query($link, "SELECT path FROM ".$prefix."images WHERE other_id='".$_GET['id']."' AND type='moreimages'");
							$num=mysqli_num_rows($d);
							if($num!=0){
								echo"<ul class='thumbnails'>";
									while($r=mysqli_fetch_assoc($d)){
										echo"<li id='image-1' class='thumbnail'>
						                      <img src='".$r['path']."' alt='' class='scale_image'>
						                    </li>";
									}
									echo"</ul>";	
							}
	                  	?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">SEO keywords (Please specify keywords seperated by a commas) </label>
                        <input type="text" class="form-control" id="keywords" name="keywords" value='<?php echo $data4['keywords']; ?>'>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Description </label>
                        <input type="text" class="form-control" id="des" name="des" value='<?php echo $data4['des']; ?>'>
                    </div>
                 <div class="form-group">
					<label class="col-md-1 control-label" for="name">Category</label>  
				   <div class="col-md-5">
                        <select id="category" name="category" class="form-control" data-rel="chosen">
                        	<option selected><?php echo ucfirst($data2['category']); ?></option>
                            <?php
                            	$query="SELECT category FROM ".$prefix."categories WHERE type='parent' ORDER BY id DESC";
								$result=mysqli_query($link, $query);
								while($data4=mysqli_fetch_assoc($result)){
									if($data2['category']==$data4['category']){
									}else{
										echo "<option>".ucfirst($data4['category'])."</option>";
									}
								}
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
					<label class="col-md-1 control-label" for="name">Sub Category</label>  
				   <div class="col-md-4">
                        <select id="sub" name="sub" class="form-control" data-rel="chosen">
                        	<?php 
	                        	if($data2['sub_category']!="")
	                        	echo "<option selected>".ucfirst($data2['sub_category'])."</option>";
	                        	else{
	                        		echo "<option selected='selected'>Please select a sub category</option>";
	                        	}
                        	?>

                        </select>
                    </div>
                </div>
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="form-group" style="text-align: center;">
                	<button class="btn btn-success btn-lg" type="submit" id="btn-editpost" name="btn-editpost">Update</button>
                	<a href="admin/manageproduct" class="btn btn-danger btn-lg">Cancel</a>
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
