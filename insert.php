<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		$conn = mysqli_connect("staffs.czptxhzjxjrt.us-east-1.rds.amazonaws.com", "admin", "Spruce2020.", "student");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college(first_name,
		last_name,gender,address,email, comments) VALUES ('$first_name',
			'$last_name','$gender','$address','$email', '$comments')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your AWS Server"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email\n $comments");
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




