<!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>
            	<?php
						$query="SELECT value FROM ".$prefix."website_option WHERE id=7";
						$result=mysqli_query($link, $query);
						$dddd=mysqli_fetch_assoc($result);
						echo $dddd['value'];
				?>
			</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Popular Sub Categories</h2>
            <ul class="list-unstyled">
              <?php 
                    		$query="SELECT * FROM ".$prefix."categories WHERE type='Sub Category' ORDER BY id DESC LIMIT 8";
							$result=mysqli_query($link, $query);
							while($data=mysqli_fetch_assoc($result)){
								$query="SELECT link FROM ".$prefix."categories WHERE type='parent' AND category='".$data['parent']."'";
								$res=mysqli_query($link, $query);
								$data2=mysqli_fetch_assoc($res);
								echo "<li><a href='blog/".strtolower($data2['link'])."/".strtolower($data['link'])."'>".ucfirst($data['category'])."</a></li>";
							}
			?>
            </ul>
          </div>
          <!-- END INFO BLOCK -->
          
          
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Popular Categories</h2>
            <ul class="list-unstyled">
              <?php 
             	 $query="SELECT * FROM ".$prefix."categories WHERE type='parent' ORDER BY id DESC LIMIT 8";
				 $result=mysqli_query($link, $query);
					while($data=mysqli_fetch_assoc($result)){
						echo "<li><a href='blog/".strtolower($data['link'])."'>".ucfirst($data['category'])."</a></li>";
					}
			?>
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
               <?php
						$query="SELECT value FROM ".$prefix."website_option WHERE id=8";
						$result=mysqli_query($link, $query);
						$dddd=mysqli_fetch_assoc($result);
						echo $dddd['value'];
			   ?><br>
              Phone: <?php
							$query="SELECT value FROM ".$prefix."website_option WHERE id=9";
							$result=mysqli_query($link, $query);
							$dddd=mysqli_fetch_assoc($result);
							echo $dddd['value'];
						?>
						<br>
              Email: <a><?php
							$query="SELECT value FROM ".$prefix."website_option WHERE id=10";
							$result=mysqli_query($link, $query);
							$dddd=mysqli_fetch_assoc($result);
							echo $dddd['value'];
						?></a><br>
						</address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
              <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
              <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
              <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
              <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
              <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
              <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
              <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
            </ul>
          </div>
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER -->
          <div class="col-md-6 col-sm-6">
            <div class="pre-footer-subscribe-box pull-right">
              <h2>Newsletter</h2>
              <form id='newsletter1' name="newsletter1">
                <div class="input-group">
                  <input type='email' placeholder='Your email address' name='newslette-email' class="form-control" required="required">
                  <span class="input-group-btn">
                  	 <button type='submit' id="submit-news" class="btn btn-primary">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> 
          </div>
          <!-- END NEWLETTER -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2015 © TangleWizard. ALL Rights Reserved. 
            <a style="color:#3D7EBE;margin-left:3%;text-decoration:none;" href="login.php" target='_blank'>Webmaster Login</a> 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="list-unstyled list-inline pull-right">
              <li><img src="img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
