<?php

	$file = 'config/config.php';
	if ( '' == file_get_contents( $file ) )
	{
	    header('location:installation/index.php');
	}else{
		include 'website.php';
	}

?>