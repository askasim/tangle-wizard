<div class='section'>
              <h3 class='section_title'>We are Social </h3>
              <ul class='social_media_list clearfix'>
                <li>
                	<?php
						$query="SELECT value FROM ".$prefix."website_option WHERE id=4";
						$result=mysqli_query($link, $query);
						$dddd=mysqli_fetch_assoc($result);
						echo "<a href='".$dddd['value']."' target='_blank' class='fb'>";
					?>
                    <i class='fa fa-facebook'></i>
                  </a>
                </li>
                <li>
                	<?php
						$query="SELECT value FROM ".$prefix."website_option WHERE id=5";
						$result=mysqli_query($link, $query);
						$dddd=mysqli_fetch_assoc($result);
						echo "<a href='".$dddd['value']."' target='_blank' class='twitter'>";
					?>
                    <i class='fa fa-twitter'></i>
                  </a>
                </li>
                <li>
                	<?php
						$query="SELECT value FROM ".$prefix."website_option WHERE id=6";
						$result=mysqli_query($link, $query);
						$dddd=mysqli_fetch_assoc($result);
						echo "<a href='".$dddd['value']."' target='_blank' class='pint'>";
					?>
                    <i class='fa fa-pinterest'></i>
                  </a>
                </li>
              </ul>
  </div>