<div class='main'>
      <div class='container'>
                
                  <?php
					if(!isset($_COOKIE['cart'])){
						echo"<div class='row margin-bottom-40'>
					          <!-- BEGIN CONTENT -->
					          <div class='col-md-12 col-sm-12'>
					          <h1>Shopping cart</h1>
					            <div class='shopping-cart-page'>
					              <div class='shopping-cart-data clearfix'>
					                <p>Your shopping cart is empty!</p>
					              </div>
					            </div>
					            </div>
						          <!-- END CONTENT -->
						        </div>
						        <!-- BEGIN SIMILAR PRODUCTS -->
						        <div class='row margin-bottom-40'>
						          <div class='col-md-12 col-sm-12'>
						            <h2>Most popular products</h2>
						            <div class='owl-carousel owl-carousel4'>";
						             $query="SELECT node_id,permalink,price FROM ".$prefix."node_meta ORDER BY id DESC LIMIT 14";
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
						            </div>
						          </div>
						        </div>
						        <!-- END SIMILAR PRODUCTS -->";
					}else{
						echo"<div class='row margin-bottom-40'>
				          <!-- BEGIN CONTENT -->
				          <div class='col-md-12 col-sm-12'>
				          <h1>Shopping cart</h1>
			            <div class='goods-page'>
			              <div class='goods-data clearfix'>
			                <div class='table-wrapper-responsive'>
			                <table summary='Shopping cart'>
		                  <tr>
		                    <th class='goods-page-image'>Image</th>
		                    <th class='goods-page-description'>Description</th>
		                    <th class='goods-page-quantity'>Quantity</th>
		                    <th class='goods-page-price'>Unit price</th>
		                    <th class='goods-page-total' colspan='2'>Total</th>
		                  </tr>";
						$cart=$_COOKIE['cart'];
						$newcart=explode("-", $cart);
						$item;
						$newtotal=0;
						foreach ($newcart as $key => $value) {
							$item=explode(",", $value);
							$query="SELECT * FROM ".$prefix."node WHERE id='".$item[0]."'";
							$result=mysqli_query($link, $query);
							$data=mysqli_fetch_assoc($result);
							$query="SELECT * FROM ".$prefix."node_meta WHERE node_id='".$data['id']."'";
							$result=mysqli_query($link, $query);
							$data1=mysqli_fetch_assoc($result);
							$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data['id']."' AND type='image'";
							$result=mysqli_query($link, $query);
							$data2=mysqli_fetch_assoc($result);
							echo "<tr>
			                    <td class='goods-page-image'>
			                      <a href='".$data1['permalink']."' target='_blank'><img src='".$data2['path']."' alt=''></a>
			                    </td>
			                    <td class='goods-page-description'>
			                      <h3><a href='".$data1['permalink']."' target='_blank'>".$data['title']."</a></h3>
			                    </td>
			                    <td class='goods-page-quantity'>
			                      <div class='product-quantity'>
			                      	<strong><span></span>".$item[1]."</strong>
			                      </div>
			                    </td>";
								$price=explode(" ", $data1['price']);
								$total_1= str_replace(",","", $price[0]);
								$total=$total_1*$item[1];
			                    echo "<td class='goods-page-price'>
			                      <strong>".$price[0]."<span> Rs</span></strong>
			                    </td>
			                    <td class='goods-page-total'>
			                     <strong>".$total."<span> Rs</span></strong>
			                    </td>
			                  </tr>";
			                  $newtotal+=$total;
						} 
               echo"</table>
                </div>

                <div class='shopping-total'>
                  <ul>
                    <li class='shopping-total-price'>
                      <em>Total</em>
                      <strong class='price'><span></span>".$newtotal." Rs</strong>
                    </li>
                  </ul>
                </div>
              </div>
              
              <a href='cancle_cart.php' class='btn btn-default type='submit'>Cancle shopping </a>
              <a href='home' class='btn btn-default' type='submit'>Continue shopping <i class='fa fa-shopping-cart'></i></a>
              <form action='checkout' method='post'>
              	<input type='text' name='total' style='display:none;' value='".$newtotal."' />
              	<button class='btn btn-primary' type='submit'>Checkout <i class='fa fa-check'></i></button>
              </form>
              </div>
          </div>
          <!-- END CONTENT -->";} 
              ?>            
        </div>
    </div>