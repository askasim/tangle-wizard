<?php

	/**
	 * Installation
	 */
		function generate_database()
		{
			$name=addslashes($_POST['db_name']);
			$username=addslashes($_POST['username']);
			$password=addslashes($_POST['password']);
			$host=addslashes($_POST['host']);
			$prefix1=addslashes($_POST['prefix']);
			$link = mysqli_connect($host, $username, $password, $name)
			OR die("Error : Could not Connect Because : ".mysqli_connect_error());
			$prefix='prefix';
			if($link != false){
				$file = '../config/config.php';
				$link="link";
				if ( '' == file_get_contents( $file ) )
				{
				// Open the file to get existing content
					$current = file_get_contents($file);
				  	// Append a new line to the file
					$current .= "<?php\n$".$link." = mysqli_connect('$host','$username', '$password', '$name');\n$".$prefix." = '$prefix1'\n?>";
					// Write the contents back to the file
					file_put_contents($file, $current); 
				}
			}
			$link = mysqli_connect($host, $username, $password, $name)
			OR die("Error : Could not Connect Because : ".mysqli_connect_error());
			$prefix=$prefix1;
			$tableCreate = "CREATE TABLE ".$prefix."users( 
	                                          id INT NOT NULL auto_increment, 
	                                          username VARCHAR(255) NOT NULL, 
	                                          email VARCHAR(255) NOT NULL, 
	                                          password VARCHAR(255) NOT NULL,
	                                          salt VARCHAR(255) NOT NULL,
	                                          contact_no VARCHAR(255) NOT NULL,
	                                          PRIMARY KEY (id), 
	                                          UNIQUE KEY username (username) 
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."users_meta( 
	                                          id INT NOT NULL auto_increment,
	                                          user_id INT NOT NULL,
	                                          name VARCHAR(255) NOT NULL,
	                                          display_name VARCHAR(255) NOT NULL,
	                                          account_type VARCHAR(255) NOT NULL,
	                                          status INT NOT NULL,
						  date_created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,                              
						  PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."node( 
	                                          id INT NOT NULL auto_increment,
	                                          title VARCHAR(255) NOT NULL,
	                                          content LONGTEXT,
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."pages( 
	                                          id INT NOT NULL auto_increment,
	                                          name VARCHAR(255) NOT NULL,
	                                          link VARCHAR(255) NOT NULL,
	                                          content LONGTEXT,
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			
			$tableCreate = "CREATE TABLE ".$prefix."node_meta( 
	                                          id INT NOT NULL auto_increment,
	                                          node_id INT NOT NULL,
	                                          permalink VARCHAR(255),
	                                          Parent VARCHAR(255),
	                                          category VARCHAR(255),
	                                          sub_category VARCHAR(255),
	                                          status VARCHAR(255),
	                                          posted_by VARCHAR(255),
	                                          posted_on timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	                                          price VARCHAR(255),
	                                          quantity INT NOT NULL,
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."images( 
	                                          id INT NOT NULL auto_increment,
	                                          other_id INT NOT NULL,
	                                          type VARCHAR(255),
	                                          path VARCHAR(255),
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."customers(
						  `id` int(11) NOT NULL AUTO_INCREMENT,
						  `name` varchar(200) NOT NULL,
						  `email` varchar(200) NOT NULL,
						  `telephone` varchar(200) NOT NULL,
						  `password` varchar(200) NOT NULL,
						  `address` varchar(200) NOT NULL,
						  `city` varchar(200) NOT NULL,
						  `state` varchar(200) NOT NULL,
						  `postcode` varchar(200) NOT NULL,
						  `country` varchar(200) NOT NULL,
						  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
						  PRIMARY KEY (`id`)
			)";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."orders(
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `user_id` int(11) DEFAULT NULL,
			  `status` varchar(20) NOT NULL,
			  `ordered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			  PRIMARY KEY (`id`)
			)";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."orders_meta(
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `order_id` int(11) NOT NULL,
			  `name` varchar(200) NOT NULL,
			  `email` varchar(200) NOT NULL,
			  `telephone` varchar(200) NOT NULL,
			  `address` varchar(200) NOT NULL,
			  `city` varchar(200) NOT NULL,
			  `state` varchar(200) NOT NULL,
			  `post` varchar(200) NOT NULL,
			  `country` varchar(200) NOT NULL,
			  `payment_type` varchar(200) NOT NULL,
			  `total` varchar(200) NOT NULL,
			  `processed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			  PRIMARY KEY (`id`)
			)";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."order_product(
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `order_id` int(11) NOT NULL,
			  `node_id` int(11) NOT NULL,
			  `quantity` int(11) NOT NULL,
			  PRIMARY KEY (`id`)
			) ";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."payment_credentials(
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `name` varchar(50) NOT NULL,
					  `value` varchar(200) NOT NULL,
					  PRIMARY KEY (`id`)
			)";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."seo( 
	                                          id INT NOT NULL auto_increment,
	                                          node_id INT NOT NULL,
	                                          keywords VARCHAR(255),
	                                          des VARCHAR(255),
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."categories( 
	                                          id INT NOT NULL auto_increment,
	                                          category VARCHAR(255),
	                                          type VARCHAR(255),
	                                          parent VARCHAR(255),
	                                          link VARCHAR(255),
	                                          date_posted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."website_option( 
	                                          id INT NOT NULL auto_increment,
	                                          option_name VARCHAR(255) NOT NULL,
	                                          value VARCHAR(255),
	                                          PRIMARY KEY (id)
	                                          )";
			$queryResult = mysqli_query($link, $tableCreate);
			$tableCreate = "CREATE TABLE ".$prefix."messages (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `title` varchar(250) NOT NULL,
				  `email` varchar(250) NOT NULL,
				  `subject` varchar(250) NOT NULL,
				  `message` longtext NOT NULL,
				  `status` varchar(250) NOT NULL DEFAULT 'unread',
				  `sent_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  PRIMARY KEY (`id`)
				)";
			$queryResult = mysqli_query($link, $tableCreate);
			
			$tableCreate = "CREATE TABLE `".$prefix."newsletter` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `email` varchar(250) NOT NULL,
				  `subscribed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  PRIMARY KEY (`id`)
				)";
			$queryResult = mysqli_query($link, $tableCreate);
			
			$result=mysqli_query($link,"INSERT INTO `".$prefix."payment_credentials` (`id`, `name`, `value`) VALUES
			(1,'paypal', ''),
			(2,'api_key', ''),
			(3,'transaction_key', '')");
			
			$query="INSERT INTO `".$prefix."categories`(`category`,`type`,`parent`,`link`) VALUES ('General','parent','*','general')";
			$result=mysqli_query($link, $query);
			$query="INSERT INTO `".$prefix."seo`(`node_id`,`keywords`,`des`) VALUES ('0','','')";
			$result=mysqli_query($link, $query);
			$query="INSERT INTO `".$prefix."pages`(`name`, `link`,`content`) VALUES ('About','about','')";
			$result=mysqli_query($link, $query);
			header("Location: personal/");
		}
		function personal_details($link,$prefix)
		{
			
			$name=addslashes($_POST['name']);
			$display_name=addslashes($_POST['display_name']);
			$email=addslashes($_POST['email']);
			$contact=addslashes($_POST['contact']);
			$username=addslashes($_POST['username']);
			$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
			$password = hash('sha256', $_POST['password'] . $salt);
			for ($round = 0; $round < 65536; $round++) {
				$password = hash('sha256', $password . $salt);
			}
			$query="INSERT INTO ".$prefix."users(`username`, `email`, `password`,`salt` , `contact_no`) VALUES ('$username','$email','$password','$salt','$contact')";
			$result=mysqli_query($link, $query);
			if($result){
				$user_id=mysqli_insert_id($link);
				$query="INSERT INTO ".$prefix."users_meta(`user_id`, `name`, `display_name`, `account_type`, `status`) VALUES ('$user_id','$name','$display_name','admin','1')";
				$result=mysqli_query($link, $query);
				if($result){
					header("Location: siteoptions/");
				}
			}
		}
	function site_options($link,$prefix){
		
		$title=addslashes($_POST['title']);
		$slider=addslashes($_POST['slider']);
		$url=addslashes($_POST['url']);
		$facebook=addslashes($_POST['facebook']);
		$twitter=addslashes($_POST['twitter']);
		$pint=addslashes($_POST['pint']);
		$about=addslashes($_POST['about']);
		$address=addslashes($_POST['address']);
		$phone=addslashes($_POST['phone']);
		$email=addslashes($_POST['email']);
		$i=0;
		$options=array("title","slider","url","facebook","twitter","pint","about","address","phone","email","logo","fav");
		$value=array($title,$slider,$url,$facebook,$twitter,$pint,$about,$address,$phone,$email,"images/logo.png","images/fav.ico");
		while($i<12){
			$query="INSERT INTO `".$prefix."website_option`(`option_name`, `value`) VALUES ('$options[$i]','$value[$i]')";
			$result=mysqli_query($link, $query);
			$i++;
		}
		header("Location: finish");
	}
		
	

?>