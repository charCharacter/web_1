<?php
	header('Content-Type: text/html; charset=utf-8');
	ob_start();
	include("secret_vars.php");
	ob_end_clean();


	$class = $_GET['class'];
	
	if(!preg_match('/^[A-z0-9]+$/', $class)){
		exit();
	}

	$out['files']=[];
	
	if($res = $mysqli->query("SELECT name, url, date FROM `files` WHERE class=\"$class\"")) {
		while($obj = $res->fetch_object()){
			$out['files'][] = $obj;	
		}
		$res->close();
	}
	$mysqli->close();
	
	echo(json_encode($out));	
?>