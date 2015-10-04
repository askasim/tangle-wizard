<div class="main">
      <div class="container">
<!--==============================Breadcrumb================================-->
    <div class="breadcrumb">
      <div class="container">
        <div>
          <span><a href="#">Home</a></span> / Contact
        </div>
      </div>
    </div>
    <!--==============================content================================-->
     <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-9">
            <div class="content-page">
              <h2>Contact Form</h2>
              <?php 
              	if(isset($_GET['success'])){
              		echo"<div class='alert alert-success fade in'>
					    <strong>Success!</strong> Your message has been sent successfully.
					</div>";
              	}
              
              ?>
              <p>Please use following form to get in touch with us. We will be glad in listening from you <span class="required">*</span>.</p>
              <form method="post" action="processor.php" class="default-form">
                <div class="form-group">
                    <label>Name<span class="required">*</span></label>
                    <input type="text" name="cf_name" id="cf_name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email<span class="required">*</span></label>
                    <input type="email" name="cf_email" id="cf_email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="cf_subject" id="cf_subject" class="form-control">
                  </div>
                 <div class="form-group">
                    <label>Message</label>
                    <textarea name="cf_message" id="cf_message" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="btn-msg">Send Message</button>
                 </div>
              </form>
            </div>
          </div>
         
   </div>
   </div>