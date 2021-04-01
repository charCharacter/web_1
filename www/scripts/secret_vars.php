<?php
	$mysqli = new mysqli("localhost", "user", "passpass", "web1");
	$mysqli->set_charset("utf8");

	$salt = "...salt";
	
	$out = [];
	
	$out['code'] = 0;
?>