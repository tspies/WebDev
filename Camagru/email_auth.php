<?php
	include('server.php');
	$token  = $_GET['token'];
	$query = $dbc->prepare("SELECT * FROM camagru.user_data WHERE token = '$token'");
    $query->execute();
    $rows = $query->fetchAll();
    if (sizeof($rows) >= 1)
	{
		$query = $dbc->prepare("UPDATE camagru.user_data SET verified = 1 WHERE verified IS NULL");
    	$query->execute();	
		header('location: login.php');
	}
	else
	{
		array_push($errors, "Authentication Error, Please try again");
		foreach ($errors as $e)
					echo $e . "\n";
	}
?>