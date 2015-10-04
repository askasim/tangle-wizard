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
		$query="SELECT category FROM ".$prefix."categories WHERE id='".$_GET['id']."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		echo "<form class='form-horizontal' action='processor.php?managecat=true' method='post'>
		<fieldset>
		 <input id='id' style='display:none;' name='id' type='text' value='".$_GET['id']."' class='form-control input-md'>
		 <input id='old' style='display:none;' name='old' type='text' value='".$data['category']."' class='form-control input-md'>
		<!-- Form Name -->
		<legend>Edit Category</legend>
		
		<!-- Text input-->
		<div class='form-group'>
		  <label class='col-md-2 control-label' for='textinput'>Name</label>  
		  <div class='col-md-6'>
		  <input id='category' name='category' type='text' value='".$data['category']."' class='form-control input-md'> 
		  </div>
		</div>
		
		<!-- Button -->
		<div class='form-group'>
		  <label class='col-md-2 control-label' for='singlebutton'></label>
		  <div class='col-md-4'>
		    <button id='btn-edit-category' name='btn-edit-category' class='btn btn-primary'>Update</button>
		  </div>
		</div>
		
		</fieldset>
		</form>";
	}elseif(isset($_GET['transfer'])){
		$query="SELECT category FROM ".$prefix."categories WHERE id='".$_GET['id']."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		echo "<form class='form-horizontal' action='processor.php?managecat=true' method='post'>
		<fieldset>
		 <input id='id' style='display:none;' name='id' type='text' value='".$_GET['id']."' class='form-control input-md'>
		 <input id='old' style='display:none;' name='old' type='text' value='".$data['category']."' class='form-control input-md'>
			
			<!-- Form Name -->
			<legend>Transfer And Delete</legend>
			
			<!-- Select Basic -->
			<div class='form-group'>
			  <label class='col-md-2 control-label' for='selectbasic'>Select Category to Transfer</label>
			  <div class='col-md-6'>
			    <select id='new' name='new' class='form-control'>";
			      $query="SELECT category FROM ".$prefix."categories ORDER BY id DESC";
								$result=mysqli_query($link, $query);
								while($data1=mysqli_fetch_assoc($result)){
									if($data['category']==$data1['category']){
										
									}else{
										echo "<option>".ucfirst($data1['category'])."</option>";
									}
								}
			    echo "</select>
			  </div>
			</div>
			
			<!-- Button -->
			<div class='form-group'>
			  <label class='col-md-2 control-label' for='singlebutton'></label>
			  <div class='col-md-4'>
			    <button id='btn-transfer-category' name='btn-transfer-category' class='btn btn-primary'>Transfer And Delete</button>
			  </div>
			</div>
			
			</fieldset>
			</form>";
	}elseif(isset($_GET['delete'])){
			$query="SELECT category FROM ".$prefix."categories WHERE id='".$_GET['id']."'";
			$result=mysqli_query($link, $query);
			$data=mysqli_fetch_assoc($result);
			echo "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Do You Really Want to Delete This Category ...?</strong><br/><br/>".$data['category']."
                </div>
                <div style='text-align: center;'>
                <a class='btn btn-success' href='processor.php?managecat=true&id=".$_GET['id']."'>
                <i class='glyphicon glyphicon glyphicon-ok'></i>
                Yes
	            </a>
	            <a class='btn btn-danger' href='admin/categories'>
	                <i class='glyphicon glyphicon-trash icon-white'></i>
	                No
	            </a>
	            </div>";
	}

?>
</div>
    </div>
    	
  	</div>
    <!--/span-->

</div><!--/row-->