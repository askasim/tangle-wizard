<?php if($slider=='yes')//include 'model/slider.php'; ?>
 <div class="main" style='margin-top:3%;'>
      <div class="container">

        <div class="row margin-bottom-40">
		<?php
			$query="SELECT category FROM ".$prefix."categories WHERE type='parent' ORDER BY id";
		  	$result=mysqli_query($link, $query);
			while($data=mysqli_fetch_assoc($result)){
				$q = "SELECT COUNT(*) as `num` FROM ".$prefix."node_meta WHERE category='".ucfirst($data['category'])."'";
				$r = mysqli_query($link, $q);
				$row1 = mysqli_fetch_assoc($r);
				if($row1['num']>0){
		 		echo "<div class='col-md-12 sale-product'>
		            <h2>".ucfirst($data['category'])."</h2>
		            <div class='owl-carousel owl-carousel5'>";
				$query="SELECT node_id,permalink,price FROM ".$prefix."node_meta WHERE category='".$data['category']."' ORDER BY id DESC LIMIT 14";
		  		$res=mysqli_query($link, $query);
				while($data1=mysqli_fetch_assoc($res)){
					$query="SELECT id,title,content FROM ".$prefix."node WHERE id='".$data1['node_id']."'";
			 		$res1=mysqli_query($link, $query);
			 		$data2=mysqli_fetch_assoc($res1);
			 		$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data2['id']."' AND type='image'";
			  		$res1=mysqli_query($link, $query);
			  		$data3=mysqli_fetch_assoc($res1);
		  			echo "<div>
		                <div class='product-item'>
		                  <div class='pi-img-wrapper'>
		                    <img src='".$data3['path']."' class='img-responsive' alt='' style='width:280px;height:220px'>
		                    <div>
		                      <a href='".$data3['path']."' class='btn btn-default fancybox-button'>Zoom</a>
		                      <a href='".$data1['permalink']."' class='btn btn-default fancybox-fast-view'>View</a>
		                    </div>
		                  </div>
		                  <h3><a href='".$data1['permalink']."'>".ucfirst(substr($data2['title'], 0,20))."...</a></h3>
		                  <div class='pi-price'>".$data1['price']."</div>
		                  
		                </div>
		              </div>";
				}
					echo"</div>
          			</div>";
			}
			}
		?>             
    
        </div>     
      </div>
    </div>
