<?php

	function add_category($link,$prefix){
		$name=addslashes(ucfirst($_POST['name']));
		$query="SELECT category FROM ".$prefix."categories";
		$result=mysqli_query($link, $query);
		$isthere=0;
		while($data=mysqli_fetch_assoc($result)){
			if(strcmp($data['category'],$name)==0){
				$isthere=1;
			}
		}
		if($isthere==1){
			header("Location: admin/categories?success=false");
		}else{
		$templink=explode(" ",$name);
		$weblink=$templink[0];
		$i=0;
		foreach ($templink as $key => $value) {
			if($i==0){

			}else{
				$weblink.="_".$value;
			}
			$i++;
		}
		$weblink=strtolower($weblink);
		$query="INSERT INTO `".$prefix."categories`(`category`,`type`,`parent`,`link`) VALUES ('$name','parent','*','$weblink')";
		$result=mysqli_query($link, $query);
		header("Location: admin/categories?success=true");
		}
	}
	
	function add_sub_category($link,$prefix){
		$name=addslashes(ucfirst($_POST['name']));
		$parent=addslashes(ucfirst($_POST['parent']));
		$query="SELECT category FROM ".$prefix."categories WHERE parent='$parent'";
		$result=mysqli_query($link, $query);
		$isthere=0;
		while($data=mysqli_fetch_assoc($result)){
			if(strcmp($data['category'],$name)==0){
				$isthere=1;
			}
		}
		if($isthere==1){
			header("Location: admin/categories?succes=false");
		}else{
			$templink=explode(" ",$name);
			$weblink=$templink[0];
			$i=0;
			foreach ($templink as $key => $value) {
				if($i==0){
				}else{
					$weblink.="_".$value;
				}
				$i++;
			}
			$weblink=strtolower($weblink);
			$query="INSERT INTO `".$prefix."categories`(`category`,`type`,`parent`,`link`) VALUES ('$name','Sub Category','$parent','$weblink')";
			$result=mysqli_query($link, $query);
			header("Location: admin/categories?succes=true");
		}
	}


?>