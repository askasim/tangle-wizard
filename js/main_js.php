 <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  
    <![endif]-->
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="js/back-to-top.js" type="text/javascript"></script>
    <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="js/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='js/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="js/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="js/greensock.js" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="js/layerslider.transitions.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="js/layerslider-init.js" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script src="js/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            LayersliderInit.initLayerSlider();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    <!-- Start jQuery code -->
	<script type="text/javascript">
	$(document).ready(function() {
	    $("#submit-news").click(function() { 
	       
	        var proceed = true;
	       
	        if(proceed) //everything looks good! proceed...
	        {
	            //get input field values data to be sent to server
	            post_data = {
	                'user_email'    : $('input[name=newslette-email]').val()
	            };
	            
	            //Ajax post data to server
	            $.post('newsletter.php', post_data,'json');
	        }
	    });
	
	});
	$(document).ready(function() {
	   $("#cart-submit").click(function() { 
	       
	        var proceed1 = true;
	       
	        if(proceed1) //everything looks good! proceed...
	        {
	            //get input field values data to be sent to server
	            post_data1 = {
	                'product_id'   : $('input[name=product_id]').val(),
	                'quantity'   : $('input[name=quantity]').val()
	            };
	            //Ajax post data to server
	            $.post('cart.php', post_data1,'json');
	        }
	    });
	
	});
	</script>