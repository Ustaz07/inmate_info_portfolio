<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		include("includes/connect.php");
		require_once("includes/session.php");
		
		createstudent();
	}
	function createstudent(){
		global $connection;
		$user_id = $_POST['user_id'];
		$surname = $_POST['surname'];
		$first_name = $_POST['first_name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$enc_password = sha1($password);
		
		$query = "INSERT INTO user_tbl (user_id, surname, first_name, phone, email, address, gender, password) VALUES ('$user_id', '$surname', '$first_name', '$phone', '$email', '$address', '$gender', '$enc_password')";
		mysqli_query($connection, $query) or die(mysqli_error($connection));
		mysqli_close($connection);
	}

?>
