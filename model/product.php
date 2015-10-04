<?php
$query="SELECT * FROM ".$prefix."node_meta WHERE permalink='".$path['call_parts'][0]."'";
$result=mysqli_query($link, $query);
$data=mysqli_fetch_assoc($result);
$query="SELECT * FROM ".$prefix."node WHERE id='".$data['node_id']."'";
$result=mysqli_query($link, $query);
$data1=mysqli_fetch_assoc($result);
$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data['node_id']."' AND type='image'";
$result=mysqli_query($link, $query);
$data2=mysqli_fetch_assoc($result);
$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data['node_id']."' AND type='moreimages'";
$result=mysqli_query($link, $query);
$date=date('F j, Y g:i a',strtotime($data['posted_on']));

?>
<!--==============================Breadcrumb================================-->
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="home">Home</a></li>
          <?php
          	echo "<li><a>".ucfirst($data['category'])."</a></li>"; 
            echo "<li class='active'>".ucfirst($data1['title'])."</li>";
		  ?>
    	</ul>
    <!--==============================content================================-->
    <div class="row margin-bottom-40">
<?php         	
           echo "<!-- BEGIN CONTENT -->
          <div class='col-md-9 col-sm-7'>
            <div class='product-page'>
              <div class='row'>
                <div class='col-md-6 col-sm-6'>
                  <div class='product-main-image'>
                    <img src='".$data2['path']."' alt='' class='img-responsive' data-BigImgsrc='".$data2['path']."'>
                  </div>
                  <div class='product-other-images'>";
                  while($data3=mysqli_fetch_assoc($result)){
                  	echo "<a href='".$data3['path']."' class='fancybox-button' rel='photos-lib'>
                  	<img alt='Berry Lace Dress' src='".$data3['path']."'>
                  	</a>";
                  }                    
                  
                  echo "</div>
                </div>
                <div class='col-md-6 col-sm-6'>
                  <h1>".$data1['title']."</h1>
                  <div class='price-availability-block clearfix'>
                    <div class='price'>
                      <strong>".$data['price']."</strong>
                    </div>
                    <div class='availability'>";
                      if($data['quantity']!=0)
                      echo "Availability: <strong>In Stock</strong>";
						else
						echo "Availability: <strong>Out of Stock</strong>";
                    echo "</div>
                  </div>
                  <div class='description'>
                    <p>".$data1['content']."</p>
                  </div>
                  
                  <div class='product-page-cart'>
                     <form id='cart_form' name='cart_form' method='post'>
                     <div class='product-quantity'>
                        <input id='product-quantity' name='quantity' type='text' value='1' readonly class='form-control input-sm'>
                    </div>
                  	<input type='text' style='display:none;' name='product_id' class='form-control' required='required' value='".$data1['id']."'>
                    <button type='submit' id='cart-submit' class='btn btn-primary'>Add to cart</button>
                    </form>
                  </div>
                 
                </div>

                <div class='product-page-content'>
                  <ul id='myTab' class='nav nav-tabs'>
                    <li class='active'><a href='#Reviews' data-toggle='tab'>Reviews</a></li>
                  </ul>
                  <div id='myTabContent' class='tab-content'>
                    
                    <div class='tab-pane fade in active' id='Reviews'>

                      <!-- BEGIN FORM-->
                      <div id='disqus_thread'></div>
						<script type='text/javascript'>
						    /* * * CONFIGURATION VARIABLES * * */
						    var disqus_shortname = 'tanglewizard';
						    
						    /* * * DON'T EDIT BELOW THIS LINE * * */
						    (function() {
						        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
						        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
						    })();
						</script>
						<noscript>Please enable JavaScript to view the <a href='https://disqus.com/?ref_noscript' rel='nofollow'>comments powered by Disqus.</a></noscript>
                    </div>
                  </div>
                </div>

               
              </div>
            </div>
          </div>
          <!-- END CONTENT -->";
					
             	   ?>
</div>
</div>
</div>
