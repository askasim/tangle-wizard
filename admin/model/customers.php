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
            Customers
        </li>
        <li>
          All Customers
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
    	 <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>  All Customers</h2>

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
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Joined</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    	$query="SELECT * FROM ".$prefix."customers ORDER BY id DESC";
		$result=mysqli_query($link, $query);
   		While($data=mysqli_fetch_assoc($result)){
   		$date=date('F j, Y g:i a',strtotime($data['joined']));
   		echo "<tr>
        <td>".$data['id']."</td>
        <td class='center'>".$data['name']."</td>
        <td class='center'>".$data['email']."</td>
        <td class='center'>".$data['telephone']."</td>
        <td class='center'>".$data['address']."</td>
        <td class='center'>".$data['city']."</td>
        <td class='center'>".$data['state']."</td>
        <td class='center'>".$data['country']."</td>
        <td class='center'>
            ".$date."
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