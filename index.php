<!DOCTYPE html>
<html lang="en">
<head>
	<title>Example form in php</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="./insert.php" method="post">
			
<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

<p>
			<label for="Comments">Comments:</label>
			<textarea name="comments" id="comments"></textarea>
			</p>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
