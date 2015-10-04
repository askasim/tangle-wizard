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
            Products
        </li>
        <li>
           Manage Products
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
    	 <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>  All Products</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    	<?php
			if(isset($_GET['edit'])){
				echo "<div class='alert alert-success' role='alert'><p>Product has been Updated Successfully !!</p></div>";
			}elseif(isset($_GET['delete'])){
				echo "<div class='alert alert-success' role='alert'><p>Product has been deleted Successfully !!</p></div>";
			}
		?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Posted by</th>
        <th>Posted On</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    	$result=all_posts($link,$prefix);
   		While($data=mysqli_fetch_assoc($result)){
   		$res=post_meta($link,$prefix,$data['id']);
		$date=date('F j, Y g:i a',strtotime($res['posted_on']));
		if($res['category']=='super'){
			
		}else{
		$sub_category=$res['sub_category'];
		if($sub_category==""){
			$sub_category="None";
		}
   		echo "<tr>
        <td>".$data['id']."</td>
        <td class='center'>".ucfirst(substr($data['title'], 0,20))."....</td>
        <td class='center'>".$res['category']."</td>
        <td class='center'>".$sub_category."</td>
        <td class='center'>".$res['posted_by']."</td>
        <td class='center'>
            ".$date."
        </td>
        <td class='center'>".$res['price']."</td>
        <td class='center'>".$res['quantity']."</td>
        <td class='center'>
            <a class='btn btn-success' href='".$res['permalink']."' target='_blank'>
                <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                View
            </a>
            <a class='btn btn-info' href='admin/editpost?id=".$res['id']."'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='admin/deletepost?id=".$res['id']."'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
    </tr>";}} ?>
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