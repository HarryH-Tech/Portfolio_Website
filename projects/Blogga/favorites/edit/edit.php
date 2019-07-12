<?php
	require_once '../pdo.php';

	$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

	try {
		//prepare SELECT query
		$query = "SELECT title, description, link FROM favorites WHERE id = ? LIMIT 0,1";
		$stmt = $pdo->prepare( $query );
		
		// this is the first question mark
		$stmt->bindParam(1, $id);
		
		$stmt->execute();
		
		// store retrieved row to a variable
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		// values to fill up our form
		$title = $row['title'];
		$description = $row['description'];
		$link = $row['link'];
				   

	}
 
	// show error
	catch(PDOException $exception){
		die('ERROR: ' . $exception->getMessage());
	}
?>

<?php
$record_updated = '';
if($_POST) {
		try {
			$query = "UPDATE favorites SET title=:title,description=:description, link=:link WHERE id=:id";
			
			$stmt = $pdo->prepare($query);
			
			//form values
			$title=htmlspecialchars(strip_tags($_POST['title']));
			$description=htmlspecialchars(strip_tags($_POST['description']));
			$link=htmlspecialchars(strip_tags($_POST['link']));
			
			
			//bind params then execute the query
			$stmt -> bindParam(':title', $title);
			$stmt -> bindParam(':description', $description);
			$stmt -> bindParam(':link', $link);
			$stmt -> bindParam(':id', $id);
			
				   
			if($stmt -> execute()) {
				$record_updated = "<div class='center'>Record was updated.</div>";
			}else{
				echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
			}
         
		}
		// show errors
		catch(PDOException $exception){
			die('ERROR: ' . $exception->getMessage());
		}
	}
?>

<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="edit_styles.css">

	<!--Let browser know website is optimized for mobile-->
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
	
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?id={$id}");?>" method="post">
		<div class="container">
			<div class="row">
				<div class='col s12 m12'>
					<div class='card light-blue darken-1 center'>
						</br>
						<div class='card-title'>
							<input type='text' id="title" name='title' value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>"/>
						</div>		
						</br>
						<div class='card-text'>
							<textarea id="description" name='description' class='form-control'><?php echo htmlspecialchars($description, ENT_QUOTES);?> </textarea>
						</div>
						<div class='card-action'>
							<input type='text' name='link' value="<?php echo htmlspecialchars($link, ENT_QUOTES);  ?>" class='form-control'/>
						</div>
						<input type='submit' value='Save Changes' class='btn btn-primary'/>
						</br>
						</br>
						<a href='favorite_articles.php' class='btn btn-danger'>Back to home page</a>
						</br>
						</br>
					</div>
									<?php echo $record_updated ?>

				</div>
			</div>
		</div>
	</form>
	</body>
</html>