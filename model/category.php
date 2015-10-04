 <?php
 include 'functions/pagination.php';
 $per_page = 9;
 $r;
 if((isset($path['call_parts'][2]) && strpos($path['call_parts'][2],"_")) || (isset($path['call_parts'][2]) && ctype_alpha($path['call_parts'][2]))){
 	$query="SELECT category FROM ".$prefix."categories WHERE link='".$path['call_parts'][1]."'";
	$result=mysqli_query($link, $query);
	$mydata=mysqli_fetch_assoc($result);	
 	$parent=$mydata['category'];
	$query="SELECT category FROM ".$prefix."categories WHERE link='".$path['call_parts'][2]."'";
	$result=mysqli_query($link, $query);
	$mydata=mysqli_fetch_assoc($result);
	$category=$mydata['category'];
	$q = "SELECT COUNT(*) as `num` FROM ".$prefix."node_meta WHERE sub_category='".$category."'";
	$r = mysqli_query($link, $q);
	$row1 = mysqli_num_rows($r);
	$r = mysqli_fetch_assoc($r);
 	 if (isset($path['call_parts'][3]) && is_numeric($path['call_parts'][3]) && $path['call_parts'][3] <= ceil($r['num'] / $per_page))
					$pageno = $path['call_parts'][3];
				else {
					$pageno = 1;
				}
 }else{
 	$query="SELECT category FROM ".$prefix."categories WHERE link='".$path['call_parts'][1]."'";
	$result=mysqli_query($link, $query);
	$mydata=mysqli_fetch_assoc($result);	
 	$parent=$mydata['category'];
 	$q = "SELECT COUNT(*) as `num` FROM ".$prefix."node_meta WHERE category='".ucfirst($path['call_parts'][1])."'";
	$r = mysqli_query($link, $q);
	$row1 = mysqli_num_rows($r);
	$r = mysqli_fetch_assoc($r);
 	 if (isset($path['call_parts'][2]) && is_numeric($path['call_parts'][2]) && $path['call_parts'][2] <= ceil($r['num'] / $per_page))
					$pageno = $path['call_parts'][2];
				else {
					$pageno = 1;
				}
 }
 
 ?>
 <!--==============================Breadcrumb================================-->
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="home">Home</a></li>
                  <?php
            if((isset($path['call_parts'][2]) && strpos($path['call_parts'][2],"_")) || (isset($path['call_parts'][2]) && ctype_alpha($path['call_parts'][2]))){
           		echo "<li class='active'><a>".ucfirst($parent)."</a></li>"; 
              	echo "<li class='active'>".ucfirst($category)."</li> ";   
            	echo "<li class='active'>".$pageno."</li> ";
            }else{
            	echo "<li class='active'>".ucfirst($parent)."</li> ";  
             	echo "<li class='active'>".$pageno."</li> ";
            } 
           ?>
       </ul> 
    <!--==============================content================================-->
      <div class='row margin-bottom-40'>
          
           <?php
	           	if((isset($path['call_parts'][2]) && strpos($path['call_parts'][2],"_")) || (isset($path['call_parts'][2]) && ctype_alpha($path['call_parts'][2]))){
	           		echo "<h2 class='section_title section_title_big' style='margin-left:2%;'>".$category."</h2>";
	            }else{
					echo "<h2 class='section_title section_title_big' style='margin-left:2%;'>".$parent."</h2>";
					
	            } 
			?>
              <!-- BEGIN CONTENT -->
	          <div class='col-md-12 col-sm-7'>
	            
	            <!-- BEGIN PRODUCT LIST -->
	            <div class='row product-list'>
                <?php
                
                $startpoint = ($pageno * $per_page) - $per_page;
				$result;
				if((isset($path['call_parts'][2]) && strpos($path['call_parts'][2],"_")) || (isset($path['call_parts'][2]) && ctype_alpha($path['call_parts'][2]))){
					$result = mysqli_query($link, "SELECT * FROM ".$prefix."node_meta WHERE sub_category='".$category."' ORDER BY posted_on DESC LIMIT {$startpoint} , {$per_page}");					
	            }else{
					$result = mysqli_query($link, "SELECT * FROM ".$prefix."node_meta WHERE category='".$parent."' ORDER BY posted_on DESC LIMIT {$startpoint} , {$per_page}");					
	            } 
				
				if (mysqli_num_rows($result) == 0){
					echo "<h3 style='margin-top:2%;margin-left:2%;'>No Product listing in this category yet</h3>";
				}else {
					while ($data=mysqli_fetch_assoc($result)){
						$query="SELECT * FROM ".$prefix."node WHERE id='".$data['node_id']."'";
				 		$res1=mysqli_query($link, $query);
				 		$data1=mysqli_fetch_assoc($res1);
				 		$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data1['id']."' AND type='image'";
				  		$res1=mysqli_query($link, $query);
				  		$data2=mysqli_fetch_assoc($res1);
				  		$date=date('F j, Y g:i a',strtotime($data['posted_on']));
						if((isset($path['call_parts'][2]) && strpos($path['call_parts'][2],"_")) || (isset($path['call_parts'][2]) && ctype_alpha($path['call_parts'][2]))){
							echo "<div class='col-md-3 col-sm-6 col-xs-12'>
					                <div class='product-item'>
					                  <div class='pi-img-wrapper'>
					                    <img src='".$data2['path']."' class='img-responsive' alt='' style='width:240px;height:190px'>
					                    <div>
					                      <a href='".$data2['path']."' class='btn btn-default fancybox-button'>Zoom</a>
					                      <a href='".$data['permalink']."' class='btn btn-default fancybox-fast-view'>View</a>
					                    </div>
					                  </div>
					                  <h3><a href='".$data['permalink']."'>".ucfirst(substr($data1['title'], 0,20))."...</a></h3>
					                  <div class='pi-price'>".$data['price']."</div>
					                  
					                </div>
					              </div>
					              <!-- PRODUCT ITEM END -->";
			                }else{
							echo "<div class='col-md-3 col-sm-6 col-xs-12'>
					                <div class='product-item'>
					                  <div class='pi-img-wrapper'>
					                    <img src='".$data2['path']."' class='img-responsive' alt='' style='width:240px;height:190px'>
					                    <div>
					                      <a href='".$data2['path']."' class='btn btn-default fancybox-button'>Zoom</a>
					                      <a href='".$data['permalink']."' class='btn btn-default fancybox-fast-view'>View</a>
					                    </div>
					                  </div>
					                  <h3><a href='".$data['permalink']."'>".ucfirst(substr($data1['title'], 0,20))."...</a></h3>
					                  <div class='pi-price'>".$data['price']."</div>
					                  
					                </div>
					              </div>
					              <!-- PRODUCT ITEM END -->";			            	
			               } 
					}
				}
                
                ?>
              </div>
            <!-- END PRODUCT LIST -->
            <div class='row'>
              <div class='col-md-8 col-sm-8'>
             <?php
             if ($row1 == 0){
	
				}else {
					$whichpage;
					if((isset($path['call_parts'][2]) && strpos($path['call_parts'][2],"_")) || (isset($path['call_parts'][2]) && ctype_alpha($path['call_parts'][2]))){
						$whichpage=$page."/".$path['call_parts'][1]."/".$path['call_parts'][2];
	            	}else{
	            		$whichpage=$page."/".$path['call_parts'][1];
	            	} 
					echo pagination($r['num'], $per_page, $whichpage, $pageno);
				}
             
             ?>
          </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
