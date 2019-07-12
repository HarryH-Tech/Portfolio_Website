<?php
require_once "../pdo.php";
try {
	$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
	
	//delete query
	$query = "DELETE FROM favorites WHERE id = ?";
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(1, $id);
	
	if($stmt->execute()) {
		//if statement was executed and deletino was successful, go to index.php and tell the user record was deleted, else tell them deletion failed
		header('Location: favorite_articles.php?action=deleted');
	}else{
		die('Unable to delete record.');
	}
}

catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>