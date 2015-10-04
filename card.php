<!DOCTYPE HTML>
<html>
	<head>
		<title>Pay</title>
		<?php
			include 'css/main_css.php';
		?>
		<link rel="shortcut icon" href="images/fav.ico" />
		<link rel="icon" href="images/fav.ico" type="image/x-icon">
	</head>
	<body>
	<?php include 'pages/header.php'; ?>
<div class="container">
 <div class="col-md-8" style="border-left:2px solid #A8D7E3;">
	
  <form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
      <legend>Enter Card details</legend>
      <input id="id" name="id" style="display: none;" type="text" class="checkout-input checkout-name" value="<?php echo $_POST['id']; ?>">
	  <input id="amount" name="total" style="display: none;" type="text" class="checkout-input checkout-name" value="<?php echo $_POST['total'];; ?>">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" placeholder="Card Holder's Name" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card" id="card" placeholder="Debit/Credit Card Number" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="month" id="month" required="required">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="year">
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvc" id="cvc" placeholder="Security Code" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" name="pay-credit" id="pay-credit" class="btn btn-success">Pay Now</button>
        </div>
      </div>
    </fieldset>
  </form>

  </div>
    </div>
	</body>
<html>