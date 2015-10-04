<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="admin/dashboard">Home</a>
        </li>
        <li>
           Site Configuration
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-cog"></i>  Site Configuration</h2>

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
						echo "<div class='alert alert-success' role='alert'><p>Your Configurations are Successfully Updated  !!</p></div>";
					}
				?>
            	<form role="form" id="addpost" style="margin-top:1%;" action="processor.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  <?php
                    $i=1;
					While($i<11){
						$query="SELECT * FROM ".$prefix."website_option WHERE id=$i";
						$data=mysqli_fetch_assoc(mysqli_query($link, $query));
						$i++;
						$name=ucfirst($data['option_name']);
						if($name=='Pint'){
							$name='Pinterest';
						}
						if($name=='About'){
							echo "<div class='form-group'>
							<label for='exampleInputEmail1'>About</label>
						    <textarea class='form-control' name='about' id='about'>".$data['value']."</textarea>
						    </div>";
						}elseif($name=='Slider'){
						
					}else{
		                   	echo "<div class='form-group'>
	                        <label for='exampleInputEmail1'>".$name."</label>
	                        <input type='text' class='form-control' name='".$data['option_name']."' value='".$data['value']."'>
	                    	</div>";
						}
					}
					$query="SELECT * FROM ".$prefix."website_option WHERE id=11";
					$data=mysqli_fetch_assoc(mysqli_query($link, $query));
					echo "<div class='form-group'>
                        <label for='exampleInputFile'>Logo</label>
                        <input type='file' id='logo' name='logo'>
                    </div>";
                    echo "Current-Logo: <img src='".$data['value']."' style='margin-bottom:5px;max-width:100px;'>";
					$query="SELECT * FROM ".$prefix."website_option WHERE id=12";
					$data=mysqli_fetch_assoc(mysqli_query($link, $query));
					echo "<div class='form-group'>
                        <label for='exampleInputFile'>Favicon</label>
                        <input type='file' id='fav' name='fav'>
                    </div>";
                    echo "Current-Favicon: <img src='".$data['value']."' style='margin-bottom:5px;max-width:100px;'>";
                    ?>
                    
                <br/>
                <br/>
                <br/>
                <div class="form-group" style="text-align: center;">
                	<button class="btn btn-success btn-lg" type="submit" name="btn-siteconf">Update</button>
                	<a href="admin/dashboard" class="btn btn-danger btn-lg">Cancel</a>
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