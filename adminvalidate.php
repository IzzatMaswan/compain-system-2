<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$staffusername = test_input($_POST["staffusername"]);
	$staffpassword = test_input($_POST["staffpassword"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$staffusers = $stmt->fetchAll();
	
	foreach($staffusers as $staffuser) {
		
		if(($staffuser['staffusername'] == $staffusername) &&
			($staffuser['staffpassword'] == $staffpassword)) {
				header("location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>