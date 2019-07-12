<?php
session_start();
require_once "../pdo.php";

//initialize variables
$username = "";
$email = "";
$errors = array();
	
// Register user
if(isset($_POST['register_user'])) {
	$username = htmlspecialchars(strip_tags($_POST['username']));
	$email = htmlspecialchars(strip_tags($_POST['email']));
	$password_1 = htmlspecialchars(strip_tags($_POST['password_1']));
	$password_2 = htmlspecialchars(strip_tags($_POST['password_2']));
	
	// validate the user info
	if(empty($username)|| strlen($username) < 3) { 
		array_push($errors, "Username must be at least 3 characters long."); 
	}
	if(empty($email)) { 
		array_push($errors, "Pleae enter an email."); 
	}
	if(empty($password_1) || strlen($password_1) < 5) { 
		array_push($errors, "Sorry, your password must at least 5 characters long.");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "Please ensure your passwords match");
	}
	
	//check for username/email already  being in db
	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	$stmt = $pdo->query($user_check_query);
	$user = $stmt->fetch();

	if($user) { 
		if($user['username'] === $username) {
			array_push($errors, "Username already exists");
		}
		if ($user['email'] === $email) {
			array_push($errors, "Email already exists");
		}
	}
	
	//if no errors
	if(count($errors) == 0) {
		$password = password_hash($password_1, PASSWORD_BCRYPT);
		$query = "INSERT INTO users (username, email, password) 
					VALUES('$username', '$email', '$password')";
		$stmt=$pdo->prepare($query);
		$stmt->execute();
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: ../login/store_login.php');
	}	
}
	
	
?>