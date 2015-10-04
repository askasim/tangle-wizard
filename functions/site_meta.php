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
	
	if($page=="product"){
		$query="SELECT node_id FROM ".$prefix."node_meta WHERE permalink='".$path['call_parts'][0]."'";
		$result=mysqli_query($link, $query);
		$data=mysqli_fetch_assoc($result);
		$query="SELECT title FROM ".$prefix."node WHERE id='".$data['node_id']."'";
		$result=mysqli_query($link, $query);
		$data3=mysqli_fetch_assoc($result);
		$query="SELECT path FROM ".$prefix."images WHERE other_id='".$data['node_id']."' AND type='image'";
		$result=mysqli_query($link, $query);
		$ddd=mysqli_fetch_assoc($result);
		$query="SELECT keywords,des FROM ".$prefix."seo WHERE node_id='".$data['node_id']."'";
		$result=mysqli_query($link, $query);
		$data1=mysqli_fetch_assoc($result);
		echo "
		<meta name='identifier-url' content='".$url."' />
		<meta name='title' content='".$website."' />
		<meta name='description' content='".$data1['des']."' />
		<meta name='keywords' content='".$data1['keywords']."' />
		<meta name='author' content='".$website."' />
		<meta name='revisit-after' content='15' />
		<meta name='language' content='EN' />
		<meta name='copyright' content='© 2015 ".$website."' />
		<meta name='robots' content='All' />
		<meta property='og:title' content='".$data3['title']."' />
		<meta property='og:site_name' content='".$website."'/>
		<meta property='og:url' content='".$url."/".$path['call_parts'][0]."' />
		<meta property='og:description' content='".$data1['des']."'/>
		<meta property='og:type' content='article' />
		<meta property='og:locale' content='en_US' />   
		<meta property='og:image' content='".$url."/".$ddd['path']."'/>
		";
		
	}
	else{
			$query="SELECT keywords,des FROM ".$prefix."seo WHERE node_id='0'";
			$result=mysqli_query($link, $query);
			$data1=mysqli_fetch_assoc($result);
			echo "
			<meta name='identifier-url' content='".$url."' />
			<meta name='title' content='".$website."' />
			<meta name='description' content='".$data1['des']."' />
			<meta name='keywords' content='".$data1['keywords']."' />
			<meta name='author' content='".$website."' />
			<meta name='revisit-after' content='15' />
			<meta name='language' content='EN' />
			<meta name='copyright' content='© 2015 ".$website."' />
			<meta name='robots' content='All' />
			<meta property='og:title' content='".$website."' />
			<meta property='og:site_name' content='".$website."'/>
			<meta property='og:url' content='".$url." />
			<meta property='og:type' content='article' />
			<meta property='og:locale' content='en_US' />   
			<meta property='og:image' content='".$url."/fileman/Uploads/Images/Default.jpg'/>
			";
			
		}
	

?>