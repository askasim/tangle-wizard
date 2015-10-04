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
        <?php
       	    $query="SELECT * FROM ".$prefix."messages WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data=mysqli_fetch_assoc($result);
			$query="UPDATE ".$prefix."messages SET status='read' WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
        ?>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-message"></i> Read Message</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
            	<?php 
            		echo "<h5><strong>Name: </strong>".$data['title']."</h5>";
					echo "<h5><strong>Email: </strong>".$data['email']."</h5>";
					echo "<h5><strong>Subject: </strong>".$data['subject']."</h5>";
					echo "<h5><strong>Message: </strong>".$data['message']."</h5>";
            	?>
            	<a class='btn btn-danger' href='admin/messages'>
	                <i class='glyphicon glyphicon-back'></i>
	                Go Back
	            </a>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->