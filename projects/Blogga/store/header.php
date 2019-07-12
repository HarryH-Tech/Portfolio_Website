
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="icon" href="icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--<script src="https://kit.fontawesome.com/6ce008e176.js"></script>-->
	<title>Blogga Favorites</title>
</head>

<body>
	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="light-blue">
			<div class="container">
				<a href="#" class="brand-logo center">Blogga</a>
				<?php if (!empty($_SESSION['user_id'])) {
					echo "<a class='right' href='../logout.php'>Logout</a>";
				} ?>
				</br>
			</div>
		</nav>
	</div>
	</br>