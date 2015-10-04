<?php
	include('config/config.php');
		if($_POST['parent'])
		{
			
			$parent=$_POST['parent'];
			$query="SELECT category FROM ".$prefix."categories WHERE parent='$parent'";
			$result=mysqli_query($link, $query);
			$count=1;
		while($data=mysqli_fetch_assoc($result))
		{
			$category=$data['category'];
			echo '<option value="'.$category.'">'.$category.'</option>';
			$count++;
		}
		if($count==1){
			echo '<option value="Please select a sub category">Sorry No Category Found </option>';
		}
	}
?>