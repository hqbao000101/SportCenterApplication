<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "smanage";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		// die("Connect failed: ".$conn->connect_error);
	}
	
	mysqli_set_charset($conn,"utf8");
	
	$sql = "SELECT * FROM user";

	$result = $conn->query($sql);
	$user_list = array(); 

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			# code... hien thi
			// var_dump($row);
			array_push($user_list, $row);
		}
	} else {
		echo "<br>0 results";
	}

	$conn->close();
?>