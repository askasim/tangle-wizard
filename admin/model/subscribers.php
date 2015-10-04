<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
           Subscriber List
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
    	 <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>  All Subscriber</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
    	<th>ID</th>
        <th>Email</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    	$query="SELECT * FROM ".$prefix."newsletter ORDER BY id ASC";
		$result=mysqli_query($link, $query);
   		While($data=mysqli_fetch_assoc($result)){
		$date=date('F j, Y g:i a',strtotime($data['subscribed_on']));
   		echo "<tr>
        <td>".$data['id']."</td>
        <td class='center'>".$data['email']."</td>
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