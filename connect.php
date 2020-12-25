<?php
	$username = $_POST['username'];
	$password = $_POST['password'];


	//Database Connection
	$conn = new mysqli('localhost','root','root','sql-injection-test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed Dude : ". $conn->connect_error);
	} else {
		$sql = "SELECT * FROM USERS";
		$result = $conn->query($sql);

		if($result->num_rows >0){
			while($row = $result->fetch_assoc()){
				echo ""
			}
		}
		$stmt->close();
		$conn->close();
	}

?>