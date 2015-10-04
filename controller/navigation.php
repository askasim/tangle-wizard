<!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>
                        <?php
							$query="SELECT value FROM ".$prefix."website_option WHERE id=9";
							$result=mysqli_query($link, $query);
							$dddd=mysqli_fetch_assoc($result);
							echo $dddd['value'];
						?>
						</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="myaccount">My Account</a></li>
                        <li><a href="cart">Checkout</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="home"><img style="max-width:80%;margin-top:-10px;border:2px solid #F2F2F2;" src="images/logo.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
          	<li><a href="home">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
               Shop Categories
              </a>
              <!-- BEGIN DROPDOWN MENU -->
              <ul class="dropdown-menu">
                
				<?php
			    	$query="SELECT category,link FROM ".$prefix."categories WHERE type='parent' ORDER BY id ASC";
					$result=mysqli_query($link, $query);
					while($data=mysqli_fetch_assoc($result)){
						$query="SELECT category,link FROM ".$prefix."categories WHERE parent='".$data['category']."'";
						$res=mysqli_query($link, $query);
			            if(mysqli_num_rows($res)>0){
			            	echo "<li class='dropdown-submenu'><a href='category/".strtolower($data['link'])."'>".ucfirst($data['category'])."<i class='fa fa-angle-right'></i></a>";
							echo "<ul class='dropdown-menu' role='menu'>";
							  while($data1=mysqli_fetch_assoc($res)){
								echo "<li><a href='category/".strtolower($data['link'])."/".strtolower($data1['link'])."'>".ucwords($data1['category'])."</a></li>";
							}
						echo "</ul>
						</li>";
						}else{
							echo "<li><a href='category/".strtolower($data['link'])."'>".ucfirst($data['category'])."</a>";
						}
					
			          echo "</li>";
					}
			    ?>
                
              </ul>
              <!-- END DROPDOWN MENU -->
            </li>
            <li><a href="support">Help And Support</a></li>
            <li><a href="contact">Contact Us</a></li>
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->