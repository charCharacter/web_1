<?php
	header('Content-Type: text/html; charset=utf-8');
	ob_start();
	include("secret_vars.php");
	ob_end_clean();

	
	$user_category = (int)urldecode($_POST['category']);
	$user_name = urldecode($_POST['name']);
	$user_comment = urldecode($_POST['comment']);
	$date = date('j.n.Y');
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
	

	if(strlen($user_category) == 0 || strlen($user_name) == 0 || strlen($user_comment) == 0 || $user_category!=0 && $user_category!=1){
		$out['code'] = 1;
		exit(json_encode($out));		
	}

	if($stmt5 = $mysqli->prepare("INSERT INTO `comments` (`name`, `category`, `text`, `date`, `ip`) VALUES (?, ?, ?, ?, ?)")){
		$stmt5->bind_param("sisss", $user_name, $user_category, $user_comment, $date, $ip);
		$stmt5->execute();
		
		$new_id = $mysqli->insert_id;
		if($new_id < 1){
			$out['code'] = 5;
			exit(json_encode($out));		
		}
	} else {
		$out['code'] = 5;
		exit(json_encode($out));
	}


	$out['code'] = 11;
	$out['book_id'] = $new_id;

	$mysqli->close();
	
	echo(json_encode($out));	
?>