<!DOCTYPE html>
<html lang="en">
<head>
	<title>SQL Injection Attack | Demo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container">
			<img src="images/sql-injection.jpg" height="300" alt="SQL-Injection Attack">
			<div class="centered">
			  	<span class="login100-form-title1 p-b-51" style="text-shadow: 1px 1px 0px #fff;">
					SQL Injection Attack
				</span>
			</div>
		</div>
		<div align="right">
			<a href="index.php" style="color: #5768ad;font-size: 17px;"><u>Home</u></a>&emsp;&emsp;
			<a href="registration.php" style="color: #5768ad;font-size: 17px;"><u>Data Entry</u></a>&emsp;&emsp;
		</div>
		<marquee>Simulation Results for SQL Injection Attack</marquee>
		<div class="row">
			<div class="column">
				<div class="container-login100">
					<div class="wrap-login100 p-b-90">
						<form class="login100-form validate-form flex-sb flex-w" action="login_after.php" method="post">
							<span class="login100-form-title p-b-10">
								Login
							</span>
							<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
								<input class="input100" type="text" name="username" placeholder="Username">
								<span class="focus-input100"></span>
							</div>
							
							
							<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
								<input class="input100" type="password" name="password" placeholder="Password">
								<span class="focus-input100"></span>
							</div>
							

							<div class="container-login100-form-btn m-t-17">
								<button class="login100-form-btn">
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="container-login100">
					<span class="login100-form-title p-b-10">
						Simulation Results
					</span>

					<div class="table-responsive">
						<table class="table table-hover">
						    <thead class="thead-light">
						      <tr>
						        <th>User Name</th>
						        <th>Password</th>
						        <th>Email</th>
						        <th>Salary</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php

									//Database Connection
							    		//mysqli('z3iruaadbwo0iyfp.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','cruv7njnzdu1t3v5','rmcxxt6x5ngety2j','p64un4s1e7qam7sg');
									$conn = new mysqli('z3iruaadbwo0iyfp.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','cruv7njnzdu1t3v5','rmcxxt6x5ngety2j','p64un4s1e7qam7sg');;
									if($conn->connect_error){
										echo "$conn->connect_error";
										die("Connection Failed : ". $conn->connect_error);
									} else {
										$sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");
										$row = mysqli_num_rows($sql);	
										if($row >0){
											while($row = $sql->fetch_assoc()){
												echo "<tr><td>".$row['username']."</td>";
												echo "<td>".$row['password']."</td>";
												echo "<td>".$row['email']."</td>";
												echo "<td>".$row['salary']."</td></tr>";
											}
										}
										else{
											echo "<td>No Data Found!..</td>";
										}
										$conn->close();
									}

								?>
						    </tbody>
						  </table>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
