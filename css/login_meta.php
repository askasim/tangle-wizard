<?php

	$names=array("title","slider","url");
	$value=array();
	$i=0;
	while($i<3){
		$query="SELECT value FROM ".$prefix."website_option WHERE option_name='".$names[$i]."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		$value[$i]=$data['value'];
		$i++;
	}
	$website=$value[0];
	$slider=$value[1];
	$url=$value[2];
?>
    <base href="<?php echo $url; ?>/"> 
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/fav.ico" />
	<link rel="icon" href="images/fav.ico" type="image/x-icon">
    
    <title><?php echo $website; ?> - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
     <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/adapters/jquery.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->