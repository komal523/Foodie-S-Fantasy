<!DOCTYPE html>
<html>

<head>
	<title>insert data</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => login
		$conn = mysqli_connect("localhost", "root", "", "login");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 2 values from the form data(input)
		$user = $_REQUEST['user'];
		$pass = $_REQUEST['pass'];
		
		
		// Performing insert query execution
		// here our table name is customer
		$sql = "INSERT INTO customer VALUES ('$user',
			'$pass')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
