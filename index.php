<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<h2>Registration Form</h2>
	<form action="connection.php" method="POST">

			<h4>Registration Form</h4>

			<div class="container">
			<label>Username</label>
			<input type="text" name="username" placeholder="You Nmae" required><br><br>

			
			<label>Email Id</label>
			<input type="text" name="email_id" placeholder="Your Email Id" required><br><br>
			
			<label>Password</label>
			<input type="password" name="password" placeholder="Your Password" required><br><br>
		
			<label>Confirm Password</label>
			<input type="password" name="conf_pass" placeholder="Confirm Password" required><br><br>
			

			<h4>Personal Details</h4>

			<label>First Name</label>
			<input type="text" name="first_name" placeholder="First Name" required>

			<label>Middle Name</label>
			<input type="text" name="middle_name" placeholder="Middle Name" required>

			<label>Last Name</label>
			<input type="text" name="last_name" placeholder="Last Name" required><br><br>

			<label>Address</label>
			<textarea name="address" placeholder="Your address" required></textarea><br><br>

			<label>Contact</label>
			<input type="number" name="contact" placeholder="Your contact" required><br><br>

			<label>Gender</label>
			<input type="radio" name="gender" value="Male" required>Male
			<input type="radio" name="gender" value="Female" required>Female  <br><br>
		

			<label>Date of Birth </label>
			<input type="date" name="date_of_birth" required><br><br>

			<label>Country</label>
			<select name="country" required>
				<option>India</option>
				<option>Frans</option>
				<option>Japan</option>
				<option>China</option>
			</select><br><br>

			<button type="submit" name="submit" class="btn" >Submit</button>
		</div>

		</form>

</body>
</html>
