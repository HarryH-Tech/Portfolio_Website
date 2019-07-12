<?php 
	include 'register_server.php';
	include '../header.php';
?>

<head>
	<style>
		<?php
			include './styles/register_styles.css';
		?>
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
</head>

<h2>Register</h2>
	
<form method="post" action="register.php">
  	<?php include('../errors.php'); ?>
	<div class="container">
		<div class="col s8 center">
			<div class="input-group">
				<label>
					
					<i class="material-icons prefix">account_circle</i></br>
					Username
				</label>
				<input type="text" name="username">
				
			</div>
			<div class="input-group">
				<label>
					
					<i class="material-icons prefix">email</i></br>
					Email
				</label>
				<input type="email" name="email">
			</div>
			<div class="input-group">
				<label for='password'>
					<i class="material-icons prefix">vpn_key</i></br>
					Password
				</label>
				<input id='password' type="password" name="password_1"/>
				<p id="password-strength-text"></p>
				
				
			</div>
			<div class="input-group">
				<label>
					
					<i class="material-icons prefix">check</i></br>
					Confirm password
				</label>
				<input type="password" name="password_2">
			</div>
			</br>
			<div class="input-group">
			  <button type="submit" class="btn" name="register_user">Register</button>
			</div>
			<p>
				Already a member? <a href="../login/store_login.php">Sign in</a>
			</p>
		</div>
	</div>
</form>
	<script src="register.js"></script>

</body>
</html>