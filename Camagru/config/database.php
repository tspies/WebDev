<?php
	$servername = "localhost";
	$database = "camagru";
	$user = "root";
	$password = "abc123";
	$option = [
		PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES 		=> false,
	];
	$first_connect = new PDO("mysql:host=$servername", $user, $password);
	$dbc = new PDO("mysql:host=$servername;dbname=$database", $user, $password, $option); 
?>