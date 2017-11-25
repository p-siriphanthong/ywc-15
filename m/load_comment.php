<?php
	// $conn = new mysqli('localhost', 'root', '', 'ywc');
	// $url = parse_url(getenv('CLEARDB_DATABASE_URL'));
	// $server = $url['host'];
	// $username = $url['user'];
	// $password = $url['pass'];
	// $db = substr($url['path'], 1);
	// $conn = new mysqli($server, $username, $password, $db);
	$conn = new mysqli('us-cdbr-iron-east-05.cleardb.net', 'bcd77d33767975', 'be0ca615', 'heroku_e1704d2f0a23fb7');

	// Check connection
	if(mysqli_connect_errno()) {
		print_r('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	mysqli_query($conn, 'SET NAMES UTF8');
	$result = $conn->query('SELECT * FROM comments');

	$comments = '[';
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		if($comments != "[")
			$comments .= ", ";
		$comments .= '{"text": "' . $rs['comment'] . '", ';
		$comments .= '"weight": ' . rand(1, 10) . '}';
	}
	$comments .= ']';

	$conn->close();
	print $comments;
	exit(0);
?>