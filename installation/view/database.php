 <div>
        <ul class="breadcrumb">
            <li>
                <a href="installation/welcome">Welcome</a>
            </li>
            <li>
                <a href="installation/database/" >Database Generation</a>
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
                        	<h3>Database Wizard</h3>
							<P>
								This wizard Will guide you in generating database for your Website
							</P>
							<form class="form-horizontal" action="installation/processor" method="post" style="margin-top:2%;">
								<fieldset>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="db_name">Database Name:</label>  
								  <div class="col-md-6">
								  <input id="db_name" name="db_name" type="text" placeholder="database name" class="form-control input-md">
								  <span class="help-block">please enter your database name</span>  
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="username">Username:</label>  
								  <div class="col-md-6">
								  <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" required="">
								  <span class="help-block">please enter database's username</span>  
								  </div>
								</div>
								
								<!-- Password input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="password">Password:</label>
								  <div class="col-md-6">
								    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md">
								    <span class="help-block">please enter your database's password</span>
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="host">Host:</label>  
								  <div class="col-md-6">
								  <input id="host" name="host" type="text" value="localhost" class="form-control input-md" required="">
								  <span class="help-block">Host name</span>  
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="prefix">Table Prefix:</label>  
								  <div class="col-md-6">
								  <input id="prefix" name="prefix" type="text"  value="cms_" class="form-control input-md" required="">
								  <span class="help-block">table name prefix</span>  
								  </div>
								</div>
								
								<!-- Button -->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="submit_db"></label>
								  <div class="col-md-4">
								    <button id="submit_db" name="submit_db" class="btn btn-success">Generate</button>
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
                   		 <div class="progress-bar" style="width: 10%;">10%</div>
                   		 </div>
                	</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->