<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
           Messages
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
    	 <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>  All Posts</h2>

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
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Sent On</th>
        <th>Stauts</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    	$query="SELECT * FROM ".$prefix."messages ORDER BY id DESC";
		$result=mysqli_query($link, $query);
   		While($data=mysqli_fetch_assoc($result)){
		$date=date('F j, Y g:i a',strtotime($data['sent_on']));
   		echo "<tr>
        <td class='center'>".$data['title']."</td>
        <td class='center'>".$data['email']."</td>
        <td class='center'>".$data['subject']."</td>
        <td class='center'>".ucfirst(substr($data['message'], 0,40))."....</td>
        <td class='center'>
            ".$date."
        </td>
        <td class='center'>
            ".$data['status']."
        </td>
        <td class='center'>
            <a class='btn btn-success' href='admin/read?id=".$data['id']."'>
                <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                View
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