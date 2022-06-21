<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "complain system 2";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=complain system 2",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
