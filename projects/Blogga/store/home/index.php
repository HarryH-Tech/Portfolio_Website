<?php
	session_start();
	include '../header.php';	
	require_once "../pdo.php";	
	
	//check to see status of user session
	if (!isset($_SESSION['logged_in'])) {
		header("Location: ../login/store_login.php"); 
	};
	
	
	//DB query 
	$query = "SELECT id,name,description, code,price,image FROM products ORDER BY id DESC";
	$stmt = $pdo->prepare($query);
	$stmt->execute();
	$num = $stmt -> rowCount();
?>

<head>
	<style>
	<?php include 'index_styles.css' ?>
	</style>
</head>

<?php	
	//build interface with retrieved db data
	if($num > 0) {
		echo "<div class='container'>";
		echo "<div class='row'>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			extract($row);
			echo "<div class='col s6 m6 center'>";
			echo "<div class='card hoverable light-blue large lighten-1'>";
			echo "<div class='card-title'>";
			echo "<strong>".$row['name']."</strong></br>";
			echo "</div>";
			echo "<img class='materialboxed product_image' alt='Product Image' 
			     src='".$row['image']."?<?=rand(1,32000)?>'/>";
			echo "<p id='price'>$".$row['price']."</p>";
			echo "<p class='description'>".$row['description']."</p>";
			echo "<input type='submit' name='one_click_buy' class='btn' value='One Click Buy'/>";
			echo "<input onclick='showCart()' type='submit' name='add_to_cart' class='btn' value='Add To Cart'/>";
			echo "</div>";
			echo "</div>";
		}
		echo "</div";
		echo "</div";
	}
?>
<body onload="alertUser('We are still working on making this store functional, sorry for any trouble this may cause but thanks for visiting!')">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	// Make images zoomable
	const mb = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(mb, {});
	
	//alert user onload
	alert('We are still working on making this store functional, sorry for any trouble this may cause but thanks for visiting!');
	
	
	
</script>
</body>