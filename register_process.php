<?php 

session_start();
$users = [];

if($_SERVER['REQUEST_METHOD']=='POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(isset($users[$email])) {
		$_SESSION['message'] = "<p style='color:red'>Email already registered , Please choose a different one </p>";
		header("Location: register.php");
		exit;
	} else {
		$users[$email] = $password;
		$_SESSION['message'] = "<p style='color:green'>Registration Successful, You can login now</p>";
		header("Location: index.php");
		exit;
	}
}