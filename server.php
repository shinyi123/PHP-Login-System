<?php 

session_start();

$contact = "";
$name ="";
$errors = array();
include 'config.php';
// register user
if (isset($_POST['reg_user'])) {
	// receive all input data from the form
	$contact = mysqli_real_escape_string($db,$_POST['contact']);
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

	// make sure form is filled correct
	if (empty($contact)) { array_push($errors, "Username is required.");}
	if (empty($name)) { array_push(($errors), "Name is required.");}
	if (empty($password_1)) { array_push(($errors), "Password is required.");}
	if ($password_1 != $password_2) {
		array_push($errors,"The two passwords do not match");
	}
	// check database to make sure user do not exits before 
	$user_check_query = "SELECT * FROM users WHERE contact='$contact' LIMIT 1";
	$result = mysqli_query($db,$user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user) {
		if ($user['contact'] === $contact) {
			array_push($errors, "Contact already exits.");
		}

		// if ($user['name'] === $name) {
		// 	array_push($errors, "name already exits");
		// }
	}

	// if no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);

		$query = "INSERT INTO users (contact,name,password) VALUES ('$contact','$name',$password')";
		mysqli_query($db,$query);
		$_SESSION['contact'] = $contact;
		// $_SESSION['name'] = $name;
		$_SESSION['success'] = "You are now registered";
		header('location:login.php');
	}


}

// login user
if (isset($_POST['login_user'])) {
	$contact = mysqli_real_escape_string($db,$_POST['contact']);
	$password = mysqli_real_escape_string($db,$_POST['password']);

	if (empty($contact)) {
		array_push($errors, "Contact is required.");
	}
	if (empty($password)) {
		array_push($errors, "Password is required.");
	}

	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE contact='$contact' AND password='$password'";
		$results = mysqli_query($db,$query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['contact'] = $contact;
			$SESSION ['success'] = "You are now logged in.";
			header("location:index.php");
		}else{
			array_push($errors, "Wrong contact or password.");
		}
	}


}




?>