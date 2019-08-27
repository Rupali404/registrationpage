<?php
	session_start();

	//initialize variables
	$username = "";
	$email_id = "";
	$password = "";
	$conf_pass = "";
	$first_name = "";
	$middle_name = "";
	$last_name = "";
	$gender = "";
	$date_of_birth = "";
	$country = "";
	$address = "";
	$contact = "";
	

	//connect  to database
	$db = mysqli_connect('localhost', 'root','','registrationpage');

	//check connection
	if($db->connect_error){

		die("connection failed:" .$db);
	}
	else{

		echo "connection successfully";
	}


	//if save button clicked
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email_id = $_POST['email_id'];
		$password = $_POST['password'];
		$conf_pass = $_POST['conf_pass'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$date_of_birth = $_POST['date_of_birth'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		
	
		$query = "INSERT INTO registration(username, email_id, password, conf_pass, first_name, middle_name, last_name, gender, date_of_birth, country, address, contact) VALUES('$username', '$email_id', '$password', '$conf_pass', '$first_name', '$middle_name', '$last_name', '$gender','$date_of_birth', '$country', '$address', '$contact')";

		mysqli_query($db, $query);
		header('Location:index.php'); //redirect to index page after inserting 
	}

?>



