<?php
	//header('Content-Type: text/html; charset=utf-8');
	ob_start();
	include("secret_vars.php");
	ob_end_clean();

	$category = (int)$_GET['category'];

	$out['comments'] = [];

	if($category != 0 && $category != 1){
		$out['code'] = 1;
		echo(json_encode($out));
	}

	
	if($res = $mysqli->query("SELECT `category`, `name`, `text`, `date` FROM `comments` WHERE `category`=$category ORDER BY `id` DESC")){
		while($obj = $res->fetch_object()){
			$out['comments'][] = $obj;	
		}
		$res->close();
	}
	$mysqli->close();
	
	echo(json_encode($out));
?>