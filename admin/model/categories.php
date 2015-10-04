<?php
	include 'functions/functions.php';
?>
<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
            Categories
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
    	<div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add New Category</h2>

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
						if($_GET['success']=="true")
						echo "<div class='alert alert-success' role='alert'><p>New Category Inserted Successfully !!</p></div>";
						else
							echo "<div class='alert alert-danger' role='alert'><p>Sorry Catergory Already Exists !!</p></div>";
					}
				?>
                <form class="form-horizontal" action="processor.php" method="post">
					<fieldset>
					<h3>Parent Category</h3>
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-2 control-label" for="name">Name Of New Category</label>  
					  <div class="col-md-6">
					  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
					  <span class="help-block">Please Enter Name of A new Category</span>  
					  </div>
					</div>
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-2 control-label" for="btn-new-category"></label>
					  <div class="col-md-4">
					    <button id="btn-new-category" name="btn-new-category" class="btn btn-success">Add</button>
					  </div>
					</div>
					
					</fieldset>
				</form>
				<?php
					if(isset($_GET['succes'])){
						if($_GET['succes']=="true")
						echo "<div class='alert alert-success' role='alert'><p>New Sub CategoryInserted Successfully !!</p></div>";
						else
							echo "<div class='alert alert-danger' role='alert'><p>Sorry Sub Category Already Exists !!</p></div>";
					}
				?>
				
				<form class="form-horizontal" action="processor.php" method="post">
					<fieldset>
					<h3>Sub Category</h3>
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-2 control-label" for="name">Name Of Sub Category</label>  
					  <div class="col-md-6">
					  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
					  <span class="help-block">Please Enter Name of A new Sub Category</span>  
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-md-2 control-label" for="name">Name Of Parent Category</label>  
					  <div class="col-md-6">
                        <select id="parent" name="parent" class="form-control" data-rel="chosen">
                            <?php
                            	$query="SELECT category FROM ".$prefix."categories WHERE type='parent' ORDER BY id DESC";
								$result=mysqli_query($link, $query);
								while($data=mysqli_fetch_assoc($result)){
									echo "<option>".ucfirst($data['category'])."</option>";
								}
                            ?>
                        </select>
                    </div>
                   </div>
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-2 control-label" for="btn-new-category"></label>
					  <div class="col-md-4">
					    <button id="btn-new-sub-category" name="btn-new-sub-category" class="btn btn-success">Add</button>
					  </div>
					</div>
					
					</fieldset>
				</form>

            </div>
        </div>
    	
  	</div>
    <!--/span-->

</div><!--/row-->


<div class="row">
    <div class="box col-md-12">
    	 <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>  Manage Categories</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    	<?php 
    				if(isset($_GET['edit'])){
    					if($_GET['edit']=="true"){
    						echo "<div class='alert alert-success' role='alert'><p>Category has been Updated Successfully !!</p></div>";
    					}
						else {
							echo "<div class='alert alert-danger' role='alert'><p>Sorry Category Already Exists !!</p></div>";
						}
					}elseif(isset($_GET['transfer'])){
						echo "<div class='alert alert-success' role='alert'><p>Category has been Deleted and Transfered Successfully !!</p></div>";
					}elseif(isset($_GET['delete'])){
						echo "<div class='alert alert-success' role='alert'><p>Category has been Deleted Successfully !!</p></div>";
					}
		?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Parent</th>
        <th>Total Post</th>
        <th>Since</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    	$result=all_categories($link,$prefix);
   		While($data=mysqli_fetch_assoc($result)){
   			if($data['parent']=="*"){
   				$res=no_posts_categories($link,$prefix,$data['category']);
   			}else{
   				$res=no_posts_sub_categories($link,$prefix,$data['category']);
   			}
   		echo "<tr>
        <td>".$data['id']."</td>
        <td class='center'>".ucwords($data['category'])."</td>
        <td class='center'>".ucfirst($data['type'])."</td>
        <td class='center'>".ucfirst($data['parent'])."</td>
        <td class='center'>".$res['num']."</td>
        <td class='center'>".$data['date_posted']."</td>
        <td class='center'>
            <a class='btn btn-info' href='admin/editcategory?id=".$data['id']."&edit=true'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-success' href='admin/editcategory?id=".$data['id']."&transfer=true'>
                <i class='glyphicon glyphicon-off icon-white'></i>
                Delete And Transfer
            </a>
            <a class='btn btn-danger' href='admin/editcategory?id=".$data['id']."&delete=true'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
    </tr>";} ?>
    </tbody>
    </table>
    </div>
    </div>
    	
  	</div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->