<?php 
	include_once "../pdo.php";
?>

<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="add_article_styles.css">
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
				<a class="right" href="../../index.php">Home</a>

				</br>

			</div>
		</nav>
	</div>
	</br>
	
	<h4 class="center">
		Add Article
	</h4>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">    
		<div class="container">
			<div class="row">
				<div class='col s12 m12'>
					<div class='card light-blue darken-1 center'>
						</br>
						<div class='card-title'>
							<input type='text' id="title"  placeholder="Article Title" name='title'/>
						</div>		
						</br>
						<div class='card-text'>
							<textarea id="description" placeholder ="Description" name='description' class='form-control'></textarea>
						</div>
						<div class='card-action'>
							<input type='text' name='link' placeholder ="Link" class='form-control'/>
						</div>
						</br>
						<input type='submit' value='Save' class='btn center'/>
						</br>
						</br>
						<a href='../favorite_articles.php' class='btn btn-danger'>Back to Favorite Articles</a>
						</br>
						</br>
					</div>
				</div>
				<br>
			</div>
		</div>
	</form>
<?php
	if($_POST) {
		if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['link'])) {
			
			$title=htmlspecialchars(strip_tags($_POST['title']));
			$description=htmlspecialchars(strip_tags($_POST['description']));
			$link=htmlspecialchars(strip_tags($_POST['link']));
			try {
				//insert query
				$query = "INSERT INTO favorites SET title = :title, 
													description = :description,
													link = :link";
				$stmt = $pdo->prepare($query);
				// bind the parameters
				$stmt->bindParam(':title', $title);
				$stmt->bindParam(':description', $description);
				$stmt->bindParam(':link', $link);
				
				if($stmt->execute()){
				echo "<div class='alert alert-success'>Record was saved.</div>";
				} 
				else {
				echo "<div class='alert alert-danger'>Unable to save record.</div>";
				}
			}

		
		
	
		// show error
		catch(PDOException $exception){
			die('ERROR: ' . $exception->getMessage());
		}
		
	}
			else {
			$alert_message = "Please ensure all text fields have been filled out correctly before clicking save.";
			echo "<script type='text/javascript'>alert('$alert_message');</script>";
		}
	}
?>