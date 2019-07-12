<?php
	session_start();
	require_once "../pdo.php";
	$errors = array();
	
	if(isset($_POST['login_user'])) {
		$username = htmlspecialchars(strip_tags($_POST['username']));
		$password = htmlspecialchars(strip_tags($_POST['password']));
		if(empty($username)) {
			array_push($errors, "Username required");
		}
		if(empty($password)) {
			array_push($errors, "Password required");
		}
		
		//Check for erros
		if(count($errors) == 0) {
			$passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
			$query = "SELECT * FROM users WHERE username=:username";
			$stmt=$pdo->prepare($query);
			$stmt->bindValue(':username', $username);
			$stmt->execute();
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			
			if($user === false) {
				array_push($errors, "Wrong username/password combination");			} 
			else {
				$validPassword = password_verify($passwordAttempt, $user['password']);
				$_SESSION['status'] = "Active";

				if($validPassword){
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['logged_in'] = time();
					$_SESSION['status'] = "Active";
					
					header('Location: ../home/index.php');
					exit;
				} 
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
}
?>