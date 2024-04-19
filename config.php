<?php

	global $conn;

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "morgana";

	$db = new mysqli($server, $username, $password, $dbname);

	if($db->connect_errno){
		die("Connection Lost...");
	}

?>