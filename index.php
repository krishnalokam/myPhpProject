<?php

session_start();


if(isset($_SESSION['email'])) {
	header("Location: dashboard.php");
	exit;
}


$title = "Home";
require_once 'includes/header.php';
?>

<h1>Welcome Home </h1>	
	
<?php require_once 'includes/footer.php'; ?>