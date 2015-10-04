<div class='main'>
      <div class='container'>
        <ul class='breadcrumb'>
            <li><a href='home'>Home</a></li>
            <li><a href=''>Store</a></li>
            <li class='active'>Checkout</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class='row margin-bottom-40'>
          <!-- BEGIN CONTENT -->
          <div class='col-md-12 col-sm-12'>
            <h1>Checkout</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class='panel-group checkout-page accordion scrollable' id='checkout-page'>

              <!-- BEGIN CHECKOUT -->
              <div id='checkout' class='panel panel-default'>
                <div class='panel-heading'>
                  <h2 class='panel-title'>
                    <a data-toggle='collapse' data-parent='#checkout-page' href='#checkout-content' class='accordion-toggle'>
                      Step 1: Checkout Options
                    </a>
                  </h2>
                </div>
                <div id='checkout-content' class='panel-collapse collapse in'>
                  <div class='panel-body row'>
                    <div class='col-md-6 col-sm-6'>
                      <h3>New Customer</h3>
                      <p>Checkout Options:</p>
                      <form method="post" action="user_details" role='form'>
                      <div class='radio-list'>
                        <label>
                          <input type='radio' name='account'  value='register' checked=""> Register Account
                        </label>
                        <label>
                          <input type='radio' name='account'  value='guest' > Guest Checkout
                        </label> 
                        <input type='text' name='total' style='display:none;' value='<?php echo $_POST['total']; ?>'>
                      </div>
                      <p>By creating an account you will be able to shop faster</p>
                      <button class='btn btn-primary' type='submit' name="btn-new-user">Continue</button>
                      </form>
                    </div>
                    <div class='col-md-6 col-sm-6'>
                      <h3>Returning Customer</h3>
                      <p>I am a returning customer.</p>
                      <form role='form' action='pay' method="post">
                        <div class='form-group'>
                          <label for='email-login'>E-Mail</label>
                          <input type='text' id='email-login' name='email' class='form-control'>
                        </div>
                        <div class='form-group'>
                          <label for='password-login'>Password</label>
                          <input type='password' id='password-login' name="password" class='form-control'>
                          <input type='text' name='total' style='display:none;' value='<?php echo $_POST['total']; ?>'>
                        </div>
                        <div class='padding-top-20'>                  
                          <button class='btn btn-primary' type='submit' name="btn-old-user">Login</button>
                        </div>
                        <hr>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CHECKOUT -->

              
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>