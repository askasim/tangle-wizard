<?php

	ob_start();
	session_start();

		function authenticate_user($link,$prefix,$username,$password) {
			$username = addslashes($username);
			$password = addslashes($password);
			
			$query = "SELECT *
		            FROM ".$prefix."users 
		            WHERE 
		            username = '$username'";
		            
			$result = mysqli_query($link, $query);
			
			if (!$result) {
				header('Location: login.php?wronguser=true');
				
			}else{
				$data = mysqli_fetch_assoc($result);
				
				$check_password = hash('sha256', $password . $data['salt']); 
		            for($round = 0; $round < 65536; $round++) 
		            { 
		                $check_password = hash('sha256', $check_password . $data['salt']); 
		            }
			if($check_password == $data['password']){
				
				$query = "SELECT name,account_type,status
		            FROM ".$prefix."users_meta
		            WHERE 
		            user_id = '".$data['id']."'";
					$result = mysqli_query($link, $query);
					$d=mysqli_fetch_assoc($result);
				if($d['account_type']=='admin'){
					if($d['status']=='inactive'){
						header('Location: loginin.php?inactive=true');
					}else{
						session_regenerate_id();
						$_SESSION['sess_user_id'] = $data['id'];
						$_SESSION['sess_username'] = $username;
						session_write_close();
						header('location: admin/dashboard');
					}
				}
				
			}else{
				header('Location: login.php?wronguser=true');
			}
		}
	}
?>