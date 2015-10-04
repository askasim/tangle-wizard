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
           Manage Orders
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
    	 <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>  All Orders</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    	<?php
			if(isset($_GET['success'])){
				echo "<div class='alert alert-success' role='alert'><p>Order has been Updated Successfully !!</p></div>";
			}
		?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Order ID</th>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>Status</th>
        <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    	$query="SELECT * FROM ".$prefix."order_product ORDER BY id DESC";
		$result=mysqli_query($link, $query);
   		While($data=mysqli_fetch_assoc($result)){
   		$query="SELECT * FROM ".$prefix."orders_meta WHERE order_id='".$data['order_id']."'";
		$res=mysqli_query($link, $query);
		$data1=mysqli_fetch_assoc($res);
		$query="SELECT * FROM ".$prefix."orders WHERE id='".$data['order_id']."'";
		$res=mysqli_query($link, $query);
		$data2=mysqli_fetch_assoc($res);
		$date=date('F j, Y g:i a',strtotime($data2['ordered_on']));
   		echo "<tr>
        <td>".$data2['id']."</td>
        <td class='center'>".$data['node_id']."</td>
        <td class='center'>".$data['quantity']."</td>
        <td class='center'>".$data2['status']."</td>
        <td class='center'>
            ".$date."
        </td>
        <td class='center'>".$data1['name']."</td>
        <td class='center'>".$data1['email']."</td>
        <td class='center'>".$data1['telephone']."</td>
        <td class='center'>".$data1['address']."</td>
        <td class='center'>".$data1['city']."</td>
        <td class='center'>".$data1['state']."</td>
        <td class='center'>".$data1['country']."</td>
        <td class='center'>
            <a class='btn btn-success' href='confirmorder.php?id=".$data2['id']."'>
                Confirm
            </a>
            <a class='btn btn-info' href='processed.php?id=".$data2['id']."'>
                Processed
            </a>
            <a class='btn btn-danger' href='deleteorder.php?id=".$data2['id']."'>
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