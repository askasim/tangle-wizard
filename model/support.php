<div class="breadcrumb">
      <div class="container">
        <div>
          <span><a href="home">Home</a></span> / Help and Support
        </div>
      </div>
    </div>
    <!--==============================content================================-->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="section text_post_block">
              <h2 class="section_title section_title_big">Help and Support</h2>
            <?php
				$query="SELECT content FROM ".$prefix."pages WHERE id=1";
				$result=mysqli_query($link, $query);
				$dddd=mysqli_fetch_assoc($result);
				echo $dddd['content'];
			?>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
   </div>