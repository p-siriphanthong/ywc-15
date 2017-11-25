<?php
	// $conn = new mysqli('localhost', 'root', '', 'ywc');
	$url = parse_url(getenv('CLEARDB_DATABASE_URL'));
	$server = $url['host'];
	$username = $url['user'];
	$password = $url['pass'];
	$db = substr($url['path'], 1);
	$conn = new mysql($server, $username, $password, $db);

	// Check connection
	if(mysqli_connect_errno()) {
		print_r('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	mysqli_query($conn, 'SET NAMES UTF8');
	$comment = mysqli_real_escape_string($conn, $_GET['comment']);
	$sql = "INSERT INTO comments VALUES (NULL, '$comment')";
	if(!mysqli_query($conn, $sql)) {
		die('Error:' . mysqli_error($conn));
	}

	$conn->close();
	exit(0);
?>