<?php
	include '../header.php';
	include 'login_server.php';
?>

<style>	
<?php include 'styles/store_login_styles.css' ?>
</style>

<h2>
	Login
</h2>
<h4>
	<a href="../../index.php">Home</a>
</h4>
	 
<form method="post" action="store_login.php">
	<?php include('../errors.php') ?>
	<div class="container">
		<div class="col s8 center">
			<div class="input-group">
				<label> 
					<i class="material-icons prefix">account_circle</i></br>
					Username
				</label>
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				<label>
					<i class="material-icons prefix">vpn_key</i></br>
					Password
				</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			<p>
				Not yet a member? <a href="../registration/register.php">Sign up</a>
			</p>
		</div>
	</div>
</form>
</body>
</html>