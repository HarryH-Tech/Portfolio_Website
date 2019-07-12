<?php
	require_once 'pdo.php';
	
	// quey database
	$query = "SELECT id, title, description, link FROM favorites ORDER BY id";
	$stmt = $pdo->prepare($query);
	$stmt->execute();
	$num = $stmt -> rowCount();
?>

<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
		<?php
			include "favorite_styles.css";
		?>
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/6ce008e176.js"></script>
	<title>Blogga Favorites</title>
</head>

<body>
	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="light-blue">
			<div class="container">
				<a href="#" class="brand-logo center">Blogga</a>
				<a class="right" href="../index.php">Home</a>
				</br>
			</div>
		</nav>
	</div>
	</br>
	<!--Add article button -->
	<div>
		<div class="center">
			<a href="add/add_article.php">
				<h6>Add Article</h6>
				<i class="material-icons">add_circle</i>
			</a>
		</div>
	</div>
	
	<!-- render blog articles -->
	<?php
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);

		echo "<div class='container'>";
		echo "<div class='row'>";
		echo "<div class='col s12 m12'>";
		echo "<div class='card light-blue darken-1 center'>";
		echo "<div class='card-title'>";
		echo "<h4>{$title}</h4>";
		echo "</div>";
		echo "<div class='card-text'>";
		echo "<p>{$description}</p>";
		echo "</div>";
		echo "<div class='card-action'>";
		echo "<a href={$link} target='_blank'>{$link}</a>";
		echo "</div>";
		echo "<a href='edit/edit.php?id=${id}' class='waves-effect waves-light btn'>Edit</a>";
		echo "<a href='#' onclick='delete_article({$id})' class='waves-effect waves-light btn'>Delete</a>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";


	}
	?>
	
	<script type='text/javascript'>
	// confirm record deletion
	function delete_article( id ){
		let answer = confirm('Are you sure?');
		if (answer){
			// if user clicked ok, 
			// pass the id to delete.php and execute the delete query
			window.location = 'delete.php?id=' + id;
		} 
	}
	</script>	
</body>