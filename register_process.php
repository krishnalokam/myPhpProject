<?php 

session_start();

require_once 'includes/config.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

    $rs = mysqli_query($con,"Select * from users where email = '$email'");
    if(mysqli_num_rows($rs)>0) {
		$_SESSION['message'] = "<p style='color:red'>Email already registered , Please choose a different one </p>";
		header("Location: register.php");
		exit;
	} else {
		echo "Insert into users (email, password) values ('$email', '".md5($password)."')";
		$rs = mysqli_query($con, "Insert into users (email, password) values ('$email', '".md5($password)."')");

		
		$_SESSION['message'] = "<p style='color:green'>Registration Successful, You can login now</p>";
		header("Location: login.php");
		exit;
	}
}