<?php
	$userame = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$salary = $_POST['salary'];

	// Database connection
	$conn = new mysqli('localhost','root','','sql-injection-test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(username,password,email,salary) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $username, $password, $email, $salary);
		$execval = $stmt->execute();
		echo $username;
		echo "Data Submitted Successfully...";
		$stmt->close();
		$conn->close();
	}
?>