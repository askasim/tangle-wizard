 <div>
        <ul class="breadcrumb">
            <li>
                <a href="installation/welcome">Welcome</a>
            </li>
            <li>
                <a href="installation/database/<?php echo $path['call_parts'][1] ?>" >Database Generation</a>
            </li>
             <li>
                <a href="installation/personal/<?php echo $path['call_parts'][1] ?>" >Personal Information</a>
            </li>
            <li>
                <a href="installation/siteoptions/<?php echo $path['call_parts'][1] ?>" >Website Options</a>
            </li>
        </ul>
    </div>
<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-th"></i> Installation</h2>

                    <div class="box-icon">
                        
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-12">
                        	<h3>Website Option</h3>
							<P>
								Please Select Your Desired Options<br/>You can change them in admin panel after account has been setup... No Worries !!
							</P>
							<form class="form-horizontal" action="installation/processor" method="post" style="margin-top:2%">
								<fieldset>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Website Title</label>  
								  <div class="col-md-5">
								  <input id="title" name="title" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Website URL</label>  
								  <div class="col-md-5">
								  <input id="url" name="url" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Facebook URL</label>  
								  <div class="col-md-5">
								  <input id="url" name="facebook" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Twitter URL</label>  
								  <div class="col-md-5">
								  <input id="url" name="twitter" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Pinterest</label>  
								  <div class="col-md-5">
								  <input id="url" name="pint" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Your Email</label>  
								  <div class="col-md-5">
								  <input id="url" name="email" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Address</label>  
								  <div class="col-md-5">
								  <input id="url" name="address" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Phone</label>  
								  <div class="col-md-5">
								  <input id="url" name="phone" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<div class="form-group">
								  <label class="col-md-4 control-label" for="title">Short description about your Blog</label>  
								  <div class="col-md-5">
									<textarea name="about"></textarea>								    
								  </div>
								</div>
								
								<!-- Button -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="submit-siteoption"></label>
								  <div class="col-md-4">
								    <button id="submit-siteoption" name="submit-siteoption" type="submit" class="btn btn-success">Continue</button>
								  </div>
								</div>
								
								</fieldset>
								</form>

                   		</div>
                   		</div>
                    <div class="row">
                    	<div class="col-md-12">
                    		Progress
                    	<div class="progress progress-striped progress-success active">
                   		 <div class="progress-bar" style="width: 70%;">70%</div>
                   		 </div>
                	</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->