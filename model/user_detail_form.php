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
            <form action='pay' method='post'>
            <div class='panel-group checkout-page accordion scrollable' id='checkout-page'>
<!-- BEGIN PAYMENT ADDRESS -->
             <?php 
             if($_POST['account']=='register'){
             	echo"<div id='payment-address' class='panel panel-default'>
                <div class='panel-heading'>
                  <h2 class='panel-title'>
                    <a data-toggle='collapse' data-parent='#checkout-page' href='#payment-address-content' class='accordion-toggle'>
                      Account &amp; Billing Details
                    </a>
                  </h2>
                </div>
                <div id='payment-address-content' class='panel-collapse collapse'>
                  <div class='panel-body row'>
                    <div class='col-md-6 col-sm-6'>
                      <h3>Your Personal Details</h3>
                      <div class='form-group'>
                        <label for='firstname'>Name <span class='require'>*</span></label>
                        <input type='text' id='name' name='name' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='email'>E-Mail <span class='require'>*</span></label>
                        <input type='text' id='email' name='email' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='telephone'>Telephone <span class='require'>*</span></label>
                        <input type='text' id='telephone' name='telephone' class='form-control' required='required'>
                      </div>
	                 <h3>Your Password</h3>
	                      <div class='form-group'>
	                        <label for='password'>Password <span class='require'>*</span></label>
	                        <input type='password' id='password' name='password' class='form-control' required='required'>
	                      </div>
	                      <div class='form-group'>
	                        <label for='password-confirm'>Password Confirm <span class='require'>*</span></label>
	                        <input type='password' id='password-confirm' name='password-confirm' class='form-control' required='required'>
	                      </div>
                    </div>
                    <div class='col-md-6 col-sm-6'>
                      <h3>Your Address</h3>
                      <div class='form-group'>
                        <label for='address1'>Address<span class='require'>*</span></label>
                        <input type='text' id='address1' name='address1' class='form-control' required='required'>
                      </div>
                      
                      <div class='form-group'>
                        <label for='city'>City <span class='require'>*</span></label>
                        <input type='text' id='city' name='city' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='city'>State <span class='require'>*</span></label>
                        <input type='text' id='city' name='state' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='post-code'>Post Code <span class='require'>*</span></label>
                        <input type='text' id='post-code' name='post-code' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='country'>Country <span class='require'>*</span></label>
                        <select class='form-control input-sm' id='country' name='country' required='required'>
                          	<option value=''> --- Please Select --- </option>
                          	<option value='AF'>Afghanistan</option>
							<option value='AX'>Åland Islands</option>
							<option value='AL'>Albania</option>
							<option value='DZ'>Algeria</option>
							<option value='AS'>American Samoa</option>
							<option value='AD'>Andorra</option>
							<option value='AO'>Angola</option>
							<option value='AI'>Anguilla</option>
							<option value='AQ'>Antarctica</option>
							<option value='AG'>Antigua and Barbuda</option>
							<option value='AR'>Argentina</option>
							<option value='AM'>Armenia</option>
							<option value='AW'>Aruba</option>
							<option value='AU'>Australia</option>
							<option value='AT'>Austria</option>
							<option value='AZ'>Azerbaijan</option>
							<option value='BS'>Bahamas</option>
							<option value='BH'>Bahrain</option>
							<option value='BD'>Bangladesh</option>
							<option value='BB'>Barbados</option>
							<option value='BY'>Belarus</option>
							<option value='BE'>Belgium</option>
							<option value='BZ'>Belize</option>
							<option value='BJ'>Benin</option>
							<option value='BM'>Bermuda</option>
							<option value='BT'>Bhutan</option>
							<option value='BO'>Bolivia, Plurinational State of</option>
							<option value='BQ'>Bonaire, Sint Eustatius and Saba</option>
							<option value='BA'>Bosnia and Herzegovina</option>
							<option value='BW'>Botswana</option>
							<option value='BV'>Bouvet Island</option>
							<option value='BR'>Brazil</option>
							<option value='IO'>British Indian Ocean Territory</option>
							<option value='BN'>Brunei Darussalam</option>
							<option value='BG'>Bulgaria</option>
							<option value='BF'>Burkina Faso</option>
							<option value='BI'>Burundi</option>
							<option value='KH'>Cambodia</option>
							<option value='CM'>Cameroon</option>
							<option value='CA'>Canada</option>
							<option value='CV'>Cape Verde</option>
							<option value='KY'>Cayman Islands</option>
							<option value='CF'>Central African Republic</option>
							<option value='TD'>Chad</option>
							<option value='CL'>Chile</option>
							<option value='CN'>China</option>
							<option value='CX'>Christmas Island</option>
							<option value='CC'>Cocos (Keeling) Islands</option>
							<option value='CO'>Colombia</option>
							<option value='KM'>Comoros</option>
							<option value='CG'>Congo</option>
							<option value='CD'>Congo, the Democratic Republic of the</option>
							<option value='CK'>Cook Islands</option>
							<option value='CR'>Costa Rica</option>
							<option value='CI'>Côte d'Ivoire</option>
							<option value='HR'>Croatia</option>
							<option value='CU'>Cuba</option>
							<option value='CW'>Curaçao</option>
							<option value='CY'>Cyprus</option>
							<option value='CZ'>Czech Republic</option>
							<option value='DK'>Denmark</option>
							<option value='DJ'>Djibouti</option>
							<option value='DM'>Dominica</option>
							<option value='DO'>Dominican Republic</option>
							<option value='EC'>Ecuador</option>
							<option value='EG'>Egypt</option>
							<option value='SV'>El Salvador</option>
							<option value='GQ'>Equatorial Guinea</option>
							<option value='ER'>Eritrea</option>
							<option value='EE'>Estonia</option>
							<option value='ET'>Ethiopia</option>
							<option value='FK'>Falkland Islands (Malvinas)</option>
							<option value='FO'>Faroe Islands</option>
							<option value='FJ'>Fiji</option>
							<option value='FI'>Finland</option>
							<option value='FR'>France</option>
							<option value='GF'>French Guiana</option>
							<option value='PF'>French Polynesia</option>
							<option value='TF'>French Southern Territories</option>
							<option value='GA'>Gabon</option>
							<option value='GM'>Gambia</option>
							<option value='GE'>Georgia</option>
							<option value='DE'>Germany</option>
							<option value='GH'>Ghana</option>
							<option value='GI'>Gibraltar</option>
							<option value='GR'>Greece</option>
							<option value='GL'>Greenland</option>
							<option value='GD'>Grenada</option>
							<option value='GP'>Guadeloupe</option>
							<option value='GU'>Guam</option>
							<option value='GT'>Guatemala</option>
							<option value='GG'>Guernsey</option>
							<option value='GN'>Guinea</option>
							<option value='GW'>Guinea-Bissau</option>
							<option value='GY'>Guyana</option>
							<option value='HT'>Haiti</option>
							<option value='HM'>Heard Island and McDonald Islands</option>
							<option value='VA'>Holy See (Vatican City State)</option>
							<option value='HN'>Honduras</option>
							<option value='HK'>Hong Kong</option>
							<option value='HU'>Hungary</option>
							<option value='IS'>Iceland</option>
							<option value='IN'>India</option>
							<option value='ID'>Indonesia</option>
							<option value='IR'>Iran, Islamic Republic of</option>
							<option value='IQ'>Iraq</option>
							<option value='IE'>Ireland</option>
							<option value='IM'>Isle of Man</option>
							<option value='IL'>Israel</option>
							<option value='IT'>Italy</option>
							<option value='JM'>Jamaica</option>
							<option value='JP'>Japan</option>
							<option value='JE'>Jersey</option>
							<option value='JO'>Jordan</option>
							<option value='KZ'>Kazakhstan</option>
							<option value='KE'>Kenya</option>
							<option value='KI'>Kiribati</option>
							<option value='KP'>Korea, Democratic People's Republic of</option>
							<option value='KR'>Korea, Republic of</option>
							<option value='KW'>Kuwait</option>
							<option value='KG'>Kyrgyzstan</option>
							<option value='LA'>Lao People's Democratic Republic</option>
							<option value='LV'>Latvia</option>
							<option value='LB'>Lebanon</option>
							<option value='LS'>Lesotho</option>
							<option value='LR'>Liberia</option>
							<option value='LY'>Libya</option>
							<option value='LI'>Liechtenstein</option>
							<option value='LT'>Lithuania</option>
							<option value='LU'>Luxembourg</option>
							<option value='MO'>Macao</option>
							<option value='MK'>Macedonia, the former Yugoslav Republic of</option>
							<option value='MG'>Madagascar</option>
							<option value='MW'>Malawi</option>
							<option value='MY'>Malaysia</option>
							<option value='MV'>Maldives</option>
							<option value='ML'>Mali</option>
							<option value='MT'>Malta</option>
							<option value='MH'>Marshall Islands</option>
							<option value='MQ'>Martinique</option>
							<option value='MR'>Mauritania</option>
							<option value='MU'>Mauritius</option>
							<option value='YT'>Mayotte</option>
							<option value='MX'>Mexico</option>
							<option value='FM'>Micronesia, Federated States of</option>
							<option value='MD'>Moldova, Republic of</option>
							<option value='MC'>Monaco</option>
							<option value='MN'>Mongolia</option>
							<option value='ME'>Montenegro</option>
							<option value='MS'>Montserrat</option>
							<option value='MA'>Morocco</option>
							<option value='MZ'>Mozambique</option>
							<option value='MM'>Myanmar</option>
							<option value='NA'>Namibia</option>
							<option value='NR'>Nauru</option>
							<option value='NP'>Nepal</option>
							<option value='NL'>Netherlands</option>
							<option value='NC'>New Caledonia</option>
							<option value='NZ'>New Zealand</option>
							<option value='NI'>Nicaragua</option>
							<option value='NE'>Niger</option>
							<option value='NG'>Nigeria</option>
							<option value='NU'>Niue</option>
							<option value='NF'>Norfolk Island</option>
							<option value='MP'>Northern Mariana Islands</option>
							<option value='NO'>Norway</option>
							<option value='OM'>Oman</option>
							<option value='PK'>Pakistan</option>
							<option value='PW'>Palau</option>
							<option value='PS'>Palestinian Territory, Occupied</option>
							<option value='PA'>Panama</option>
							<option value='PG'>Papua New Guinea</option>
							<option value='PY'>Paraguay</option>
							<option value='PE'>Peru</option>
							<option value='PH'>Philippines</option>
							<option value='PN'>Pitcairn</option>
							<option value='PL'>Poland</option>
							<option value='PT'>Portugal</option>
							<option value='PR'>Puerto Rico</option>
							<option value='QA'>Qatar</option>
							<option value='RE'>Réunion</option>
							<option value='RO'>Romania</option>
							<option value='RU'>Russian Federation</option>
							<option value='RW'>Rwanda</option>
							<option value='BL'>Saint Barthélemy</option>
							<option value='SH'>Saint Helena, Ascension and Tristan da Cunha</option>
							<option value='KN'>Saint Kitts and Nevis</option>
							<option value='LC'>Saint Lucia</option>
							<option value='MF'>Saint Martin (French part)</option>
							<option value='PM'>Saint Pierre and Miquelon</option>
							<option value='VC'>Saint Vincent and the Grenadines</option>
							<option value='WS'>Samoa</option>
							<option value='SM'>San Marino</option>
							<option value='ST'>Sao Tome and Principe</option>
							<option value='SA'>Saudi Arabia</option>
							<option value='SN'>Senegal</option>
							<option value='RS'>Serbia</option>
							<option value='SC'>Seychelles</option>
							<option value='SL'>Sierra Leone</option>
							<option value='SG'>Singapore</option>
							<option value='SX'>Sint Maarten (Dutch part)</option>
							<option value='SK'>Slovakia</option>
							<option value='SI'>Slovenia</option>
							<option value='SB'>Solomon Islands</option>
							<option value='SO'>Somalia</option>
							<option value='ZA'>South Africa</option>
							<option value='GS'>South Georgia and the South Sandwich Islands</option>
							<option value='SS'>South Sudan</option>
							<option value='ES'>Spain</option>
							<option value='LK'>Sri Lanka</option>
							<option value='SD'>Sudan</option>
							<option value='SR'>Suriname</option>
							<option value='SJ'>Svalbard and Jan Mayen</option>
							<option value='SZ'>Swaziland</option>
							<option value='SE'>Sweden</option>
							<option value='CH'>Switzerland</option>
							<option value='SY'>Syrian Arab Republic</option>
							<option value='TW'>Taiwan, Province of China</option>
							<option value='TJ'>Tajikistan</option>
							<option value='TZ'>Tanzania, United Republic of</option>
							<option value='TH'>Thailand</option>
							<option value='TL'>Timor-Leste</option>
							<option value='TG'>Togo</option>
							<option value='TK'>Tokelau</option>
							<option value='TO'>Tonga</option>
							<option value='TT'>Trinidad and Tobago</option>
							<option value='TN'>Tunisia</option>
							<option value='TR'>Turkey</option>
							<option value='TM'>Turkmenistan</option>
							<option value='TC'>Turks and Caicos Islands</option>
							<option value='TV'>Tuvalu</option>
							<option value='UG'>Uganda</option>
							<option value='UA'>Ukraine</option>
							<option value='AE'>United Arab Emirates</option>
							<option value='GB'>United Kingdom</option>
							<option value='US'>United States</option>
							<option value='UM'>United States Minor Outlying Islands</option>
							<option value='UY'>Uruguay</option>
							<option value='UZ'>Uzbekistan</option>
							<option value='VU'>Vanuatu</option>
							<option value='VE'>Venezuela, Bolivarian Republic of</option>
							<option value='VN'>Viet Nam</option>
							<option value='VG'>Virgin Islands, British</option>
							<option value='VI'>Virgin Islands, U.S.</option>
							<option value='WF'>Wallis and Futuna</option>
							<option value='EH'>Western Sahara</option>
							<option value='YE'>Yemen</option>
							<option value='ZM'>Zambia</option>
							<option value='ZW'>Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <hr>
                    <div class='col-md-12'>
                      
                      <div class='checkbox pull-right'>
                     
                      </div>                        
                    </div>
                  </div>
                </div>
              </div>";
              }
              ?>
              <!-- END PAYMENT ADDRESS -->
			<?php 
             if($_POST['account']!='register'){

              echo "<div id='shipping-address' class='panel panel-default'>
                <div class='panel-heading'>
                  <h2 class='panel-title'>
                    <a data-toggle='collapse' data-parent='#checkout-page' href='#shipping-address-content' class='accordion-toggle'>
                      Delivery Details
                    </a>
                  </h2>
                </div>
                <div id='shipping-address-content' class='panel-collapse collapse'>
                  <div class='panel-body row'>
                    <div class='col-md-6 col-sm-6'>
                      <div class='form-group'>
                        <label for='firstname-dd'>First Name <span class='require'>*</span></label>
                        <input type='text' id='firstname-dd' name='firstname-dd' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='email-dd'>E-Mail <span class='require'>*</span></label>
                        <input type='text' id='email-dd' name='email-dd' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='telephone-dd'>Telephone <span class='require'>*</span></label>
                        <input type='text' id='telephone-dd' name='telephone-dd' class='form-control' required='required'>
                      </div>
                    </div>
                    <div class='col-md-6 col-sm-6'>
                      <div class='form-group'>
                        <label for='address1-dd'>Address</label>
                        <input type='text' id='address1-dd' name='address1-dd' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='city-dd'>City <span class='require'>*</span></label>
                        <input type='text' id='city-dd' name='city-dd' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='city-dd'>State <span class='require'>*</span></label>
                        <input type='text' id='city-dd' name='state-dd' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='post-code-dd'>Post Code <span class='require'>*</span></label>
                        <input type='text' id='post-code-dd' name='post-dd' class='form-control' required='required'>
                      </div>
                      <div class='form-group'>
                        <label for='country-dd'>Country <span class='require'>*</span></label>
                        <select class='form-control input-sm' id='country-dd' name='country-dd' required='required'>
                         	<option value=''> --- Please Select --- </option>
                          	<option value='AF'>Afghanistan</option>
							<option value='AX'>Åland Islands</option>
							<option value='AL'>Albania</option>
							<option value='DZ'>Algeria</option>
							<option value='AS'>American Samoa</option>
							<option value='AD'>Andorra</option>
							<option value='AO'>Angola</option>
							<option value='AI'>Anguilla</option>
							<option value='AQ'>Antarctica</option>
							<option value='AG'>Antigua and Barbuda</option>
							<option value='AR'>Argentina</option>
							<option value='AM'>Armenia</option>
							<option value='AW'>Aruba</option>
							<option value='AU'>Australia</option>
							<option value='AT'>Austria</option>
							<option value='AZ'>Azerbaijan</option>
							<option value='BS'>Bahamas</option>
							<option value='BH'>Bahrain</option>
							<option value='BD'>Bangladesh</option>
							<option value='BB'>Barbados</option>
							<option value='BY'>Belarus</option>
							<option value='BE'>Belgium</option>
							<option value='BZ'>Belize</option>
							<option value='BJ'>Benin</option>
							<option value='BM'>Bermuda</option>
							<option value='BT'>Bhutan</option>
							<option value='BO'>Bolivia, Plurinational State of</option>
							<option value='BQ'>Bonaire, Sint Eustatius and Saba</option>
							<option value='BA'>Bosnia and Herzegovina</option>
							<option value='BW'>Botswana</option>
							<option value='BV'>Bouvet Island</option>
							<option value='BR'>Brazil</option>
							<option value='IO'>British Indian Ocean Territory</option>
							<option value='BN'>Brunei Darussalam</option>
							<option value='BG'>Bulgaria</option>
							<option value='BF'>Burkina Faso</option>
							<option value='BI'>Burundi</option>
							<option value='KH'>Cambodia</option>
							<option value='CM'>Cameroon</option>
							<option value='CA'>Canada</option>
							<option value='CV'>Cape Verde</option>
							<option value='KY'>Cayman Islands</option>
							<option value='CF'>Central African Republic</option>
							<option value='TD'>Chad</option>
							<option value='CL'>Chile</option>
							<option value='CN'>China</option>
							<option value='CX'>Christmas Island</option>
							<option value='CC'>Cocos (Keeling) Islands</option>
							<option value='CO'>Colombia</option>
							<option value='KM'>Comoros</option>
							<option value='CG'>Congo</option>
							<option value='CD'>Congo, the Democratic Republic of the</option>
							<option value='CK'>Cook Islands</option>
							<option value='CR'>Costa Rica</option>
							<option value='CI'>Côte d'Ivoire</option>
							<option value='HR'>Croatia</option>
							<option value='CU'>Cuba</option>
							<option value='CW'>Curaçao</option>
							<option value='CY'>Cyprus</option>
							<option value='CZ'>Czech Republic</option>
							<option value='DK'>Denmark</option>
							<option value='DJ'>Djibouti</option>
							<option value='DM'>Dominica</option>
							<option value='DO'>Dominican Republic</option>
							<option value='EC'>Ecuador</option>
							<option value='EG'>Egypt</option>
							<option value='SV'>El Salvador</option>
							<option value='GQ'>Equatorial Guinea</option>
							<option value='ER'>Eritrea</option>
							<option value='EE'>Estonia</option>
							<option value='ET'>Ethiopia</option>
							<option value='FK'>Falkland Islands (Malvinas)</option>
							<option value='FO'>Faroe Islands</option>
							<option value='FJ'>Fiji</option>
							<option value='FI'>Finland</option>
							<option value='FR'>France</option>
							<option value='GF'>French Guiana</option>
							<option value='PF'>French Polynesia</option>
							<option value='TF'>French Southern Territories</option>
							<option value='GA'>Gabon</option>
							<option value='GM'>Gambia</option>
							<option value='GE'>Georgia</option>
							<option value='DE'>Germany</option>
							<option value='GH'>Ghana</option>
							<option value='GI'>Gibraltar</option>
							<option value='GR'>Greece</option>
							<option value='GL'>Greenland</option>
							<option value='GD'>Grenada</option>
							<option value='GP'>Guadeloupe</option>
							<option value='GU'>Guam</option>
							<option value='GT'>Guatemala</option>
							<option value='GG'>Guernsey</option>
							<option value='GN'>Guinea</option>
							<option value='GW'>Guinea-Bissau</option>
							<option value='GY'>Guyana</option>
							<option value='HT'>Haiti</option>
							<option value='HM'>Heard Island and McDonald Islands</option>
							<option value='VA'>Holy See (Vatican City State)</option>
							<option value='HN'>Honduras</option>
							<option value='HK'>Hong Kong</option>
							<option value='HU'>Hungary</option>
							<option value='IS'>Iceland</option>
							<option value='IN'>India</option>
							<option value='ID'>Indonesia</option>
							<option value='IR'>Iran, Islamic Republic of</option>
							<option value='IQ'>Iraq</option>
							<option value='IE'>Ireland</option>
							<option value='IM'>Isle of Man</option>
							<option value='IL'>Israel</option>
							<option value='IT'>Italy</option>
							<option value='JM'>Jamaica</option>
							<option value='JP'>Japan</option>
							<option value='JE'>Jersey</option>
							<option value='JO'>Jordan</option>
							<option value='KZ'>Kazakhstan</option>
							<option value='KE'>Kenya</option>
							<option value='KI'>Kiribati</option>
							<option value='KP'>Korea, Democratic People's Republic of</option>
							<option value='KR'>Korea, Republic of</option>
							<option value='KW'>Kuwait</option>
							<option value='KG'>Kyrgyzstan</option>
							<option value='LA'>Lao People's Democratic Republic</option>
							<option value='LV'>Latvia</option>
							<option value='LB'>Lebanon</option>
							<option value='LS'>Lesotho</option>
							<option value='LR'>Liberia</option>
							<option value='LY'>Libya</option>
							<option value='LI'>Liechtenstein</option>
							<option value='LT'>Lithuania</option>
							<option value='LU'>Luxembourg</option>
							<option value='MO'>Macao</option>
							<option value='MK'>Macedonia, the former Yugoslav Republic of</option>
							<option value='MG'>Madagascar</option>
							<option value='MW'>Malawi</option>
							<option value='MY'>Malaysia</option>
							<option value='MV'>Maldives</option>
							<option value='ML'>Mali</option>
							<option value='MT'>Malta</option>
							<option value='MH'>Marshall Islands</option>
							<option value='MQ'>Martinique</option>
							<option value='MR'>Mauritania</option>
							<option value='MU'>Mauritius</option>
							<option value='YT'>Mayotte</option>
							<option value='MX'>Mexico</option>
							<option value='FM'>Micronesia, Federated States of</option>
							<option value='MD'>Moldova, Republic of</option>
							<option value='MC'>Monaco</option>
							<option value='MN'>Mongolia</option>
							<option value='ME'>Montenegro</option>
							<option value='MS'>Montserrat</option>
							<option value='MA'>Morocco</option>
							<option value='MZ'>Mozambique</option>
							<option value='MM'>Myanmar</option>
							<option value='NA'>Namibia</option>
							<option value='NR'>Nauru</option>
							<option value='NP'>Nepal</option>
							<option value='NL'>Netherlands</option>
							<option value='NC'>New Caledonia</option>
							<option value='NZ'>New Zealand</option>
							<option value='NI'>Nicaragua</option>
							<option value='NE'>Niger</option>
							<option value='NG'>Nigeria</option>
							<option value='NU'>Niue</option>
							<option value='NF'>Norfolk Island</option>
							<option value='MP'>Northern Mariana Islands</option>
							<option value='NO'>Norway</option>
							<option value='OM'>Oman</option>
							<option value='PK'>Pakistan</option>
							<option value='PW'>Palau</option>
							<option value='PS'>Palestinian Territory, Occupied</option>
							<option value='PA'>Panama</option>
							<option value='PG'>Papua New Guinea</option>
							<option value='PY'>Paraguay</option>
							<option value='PE'>Peru</option>
							<option value='PH'>Philippines</option>
							<option value='PN'>Pitcairn</option>
							<option value='PL'>Poland</option>
							<option value='PT'>Portugal</option>
							<option value='PR'>Puerto Rico</option>
							<option value='QA'>Qatar</option>
							<option value='RE'>Réunion</option>
							<option value='RO'>Romania</option>
							<option value='RU'>Russian Federation</option>
							<option value='RW'>Rwanda</option>
							<option value='BL'>Saint Barthélemy</option>
							<option value='SH'>Saint Helena, Ascension and Tristan da Cunha</option>
							<option value='KN'>Saint Kitts and Nevis</option>
							<option value='LC'>Saint Lucia</option>
							<option value='MF'>Saint Martin (French part)</option>
							<option value='PM'>Saint Pierre and Miquelon</option>
							<option value='VC'>Saint Vincent and the Grenadines</option>
							<option value='WS'>Samoa</option>
							<option value='SM'>San Marino</option>
							<option value='ST'>Sao Tome and Principe</option>
							<option value='SA'>Saudi Arabia</option>
							<option value='SN'>Senegal</option>
							<option value='RS'>Serbia</option>
							<option value='SC'>Seychelles</option>
							<option value='SL'>Sierra Leone</option>
							<option value='SG'>Singapore</option>
							<option value='SX'>Sint Maarten (Dutch part)</option>
							<option value='SK'>Slovakia</option>
							<option value='SI'>Slovenia</option>
							<option value='SB'>Solomon Islands</option>
							<option value='SO'>Somalia</option>
							<option value='ZA'>South Africa</option>
							<option value='GS'>South Georgia and the South Sandwich Islands</option>
							<option value='SS'>South Sudan</option>
							<option value='ES'>Spain</option>
							<option value='LK'>Sri Lanka</option>
							<option value='SD'>Sudan</option>
							<option value='SR'>Suriname</option>
							<option value='SJ'>Svalbard and Jan Mayen</option>
							<option value='SZ'>Swaziland</option>
							<option value='SE'>Sweden</option>
							<option value='CH'>Switzerland</option>
							<option value='SY'>Syrian Arab Republic</option>
							<option value='TW'>Taiwan, Province of China</option>
							<option value='TJ'>Tajikistan</option>
							<option value='TZ'>Tanzania, United Republic of</option>
							<option value='TH'>Thailand</option>
							<option value='TL'>Timor-Leste</option>
							<option value='TG'>Togo</option>
							<option value='TK'>Tokelau</option>
							<option value='TO'>Tonga</option>
							<option value='TT'>Trinidad and Tobago</option>
							<option value='TN'>Tunisia</option>
							<option value='TR'>Turkey</option>
							<option value='TM'>Turkmenistan</option>
							<option value='TC'>Turks and Caicos Islands</option>
							<option value='TV'>Tuvalu</option>
							<option value='UG'>Uganda</option>
							<option value='UA'>Ukraine</option>
							<option value='AE'>United Arab Emirates</option>
							<option value='GB'>United Kingdom</option>
							<option value='US'>United States</option>
							<option value='UM'>United States Minor Outlying Islands</option>
							<option value='UY'>Uruguay</option>
							<option value='UZ'>Uzbekistan</option>
							<option value='VU'>Vanuatu</option>
							<option value='VE'>Venezuela, Bolivarian Republic of</option>
							<option value='VN'>Viet Nam</option>
							<option value='VG'>Virgin Islands, British</option>
							<option value='VI'>Virgin Islands, U.S.</option>
							<option value='WF'>Wallis and Futuna</option>
							<option value='EH'>Western Sahara</option>
							<option value='YE'>Yemen</option>
							<option value='ZM'>Zambia</option>
							<option value='ZW'>Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <div class='col-md-12'>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SHIPPING ADDRESS -->";
              }
              ?>


              <!-- BEGIN PAYMENT METHOD -->
              <div id='payment-method' class='panel panel-default'>
                <div class='panel-heading'>
                  <h2 class='panel-title'>
                    <a data-toggle='collapse' data-parent='#checkout-page' href='#payment-method-content' class='accordion-toggle'>
                      Payment Method
                    </a>
                  </h2>
                </div>
                <div id='payment-method-content' class='panel-collapse collapse'>
                  <div class='panel-body row'>
                    <div class='col-md-12'>
                      <p>Please select the preferred payment method to use on this order.</p>
                      <div class='radio-list'>
                        <label>
                          <input type='radio' name='payment_type' value='CashOnDelivery' checked=''> Cash On Delivery
                        </label>
                        <label>
                          <input type='radio' name='payment_type' value='paypal'> Paypal
                        </label>
                        <label>
                          <input type='radio' name='payment_type' value='card'> Credit Card
                        </label>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- END PAYMENT METHOD -->

              <!-- BEGIN CONFIRM -->
              <div id='confirm' class='panel panel-default'>
                <div class='panel-heading'>
                  <h2 class='panel-title'>
                    <a data-toggle='collapse' data-parent='#checkout-page' href='#confirm-content' class='accordion-toggle'>
                      Confirm Order
                    </a>
                  </h2>
                </div>
                <div id='confirm-content' class='panel-collapse collapse'>
                  <div class='panel-body row'>
                    <div class='col-md-12 clearfix'>
                      <div class='table-wrapper-responsive'>
			                <table summary='Shopping cart'>
		                  <tr>
		                    <th class='goods-page-image'>Image</th>
		                    <th class='goods-page-description'>Description</th>
		                    <th class='goods-page-quantity'>Quantity</th>
		                    <th class='goods-page-price'>Unit price</th>
		                    <th class='goods-page-total' colspan='2'>Total</th>
		                  </tr>
						<?php 
						$cart=$_COOKIE['cart'];
						$newcart=explode("-", $cart);
						$item;
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
			                  }
			                ?>
			                </table>
			                </div>
                      <div class='checkout-total-block'>
			                  <ul>
			                    <li class='shopping-total-price'>
			                      <em>Total</em>
			                      <strong class='price'><span></span><?php echo $_POST['total']; ?> Rs</strong>
			                    </li>
			                  </ul>
                      </div>
                      <div class='clearfix'></div>
                      <input type='text' style='display:none;' name='total' value='<?php echo $_POST['total']; ?>'>
                      <input type='text' style='display:none;' id='post-code' name='account_type'  value='<?php echo $_POST['account']; ?>'>
                      <button class='btn btn-primary pull-right' type='submit' id='button-confirm' name='btn-pay'>Confirm Order</button>
                     </form>
                      <a type='button' href="cancle_cart.php" class='btn btn-default pull-right margin-right-20'>Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONFIRM -->
              </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>