<div id="layerslider" style="width: 100%; height: 500px;margin-top:-30px;">
           <?php
            
              $query="SELECT id,title FROM ".$prefix."node ORDER BY id DESC LIMIT 4";
			  $result=mysqli_query($link, $query);
			  $i=1;
			  while($data=mysqli_fetch_assoc($result)){
			  	if($data['id']!="1"){
			  	$query="SELECT permalink,category,posted_on,price FROM ".$prefix."node_meta WHERE node_id='".$data['id']."'";
			  	$res=mysqli_query($link, $query);
				$data1=mysqli_fetch_assoc($res);
				$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data['id']."' AND type='image'";
			  	$res=mysqli_query($link, $query);
				$data2=mysqli_fetch_assoc($res);
				$date=date('F j, Y g:i a',strtotime($data1['posted_on']));
				echo "<div class='ls-layer slide1' style='slidedirection: top; slidedelay: 8000; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; easingout: easeInOutQuint; delayin: 0; delayout: 0; transition3d: all;'> 
				<img src='".$data2['path']."' class='ls-bg' alt='Slide background' style='width:1500px; height: 495px;'>
		            <div class='ls-s4  slide-text1' style='position: absolute; top: 50%; right: 0; slidedirection : bottom; slideoutdirection : top;  durationin : 1500; durationout : 1500; easingin: easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 100; showuntil : 0;'>
		              <div class='caption_inner layer_slide_text'>
		                <div class='clearfix'>
		                  <a href='".$data1['permalink']."' class='mylink' style='color:white;font-weight:bold;font-size:30px;' role='button' class='button banner_button sport'>".ucfirst($data1['category'])."</a>
		                </div>
		                <a href='".$data1['permalink']."' class='mylink'><h2 style='color:white;font-weight:bold;font-size:24px;'>".ucwords($data['title'])."</h2></a>
		                <div style='color:white;font-weight:bold;font-size:18px;' class='event_date'>".$data1['price']."</div>
		                <div style='color:white;font-weight:bold;font-size:12px;' class='event_date'>$date</div>
		              </div>
		            </div>
		          </div>";
		          }
			  }
			  
			?>
            </div>