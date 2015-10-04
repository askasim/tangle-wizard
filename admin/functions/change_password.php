<?php

	function change_password($link,$prefix){
		$old=addslashes($_POST['old']);
		$password=addslashes($_POST['password']);
		$query="SELECT password,salt FROM ".$prefix."users WHERE id='1'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		$check_password = hash('sha256', $old . $data['salt']); 
		for($round = 0; $round < 65536; $round++) 
		   { 
		      $check_password = hash('sha256', $check_password . $data['salt']); 
		   }
		if($check_password == $data['password']){
			$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
			$pass=$_POST['password'];
			$password = hash('sha256', $_POST['password'] . $salt);
			for ($round = 0; $round < 65536; $round++) {
				$password = hash('sha256', $password . $salt);
			}
			$query="UPDATE ".$prefix."users SET password='$password',salt='$salt' WHERE id='1'";
			$result=mysqli_query($link, $query);
			header('location: logout.php');
		}else{
			header('location: admin/changepassword?success=false');
		}
	}

?>