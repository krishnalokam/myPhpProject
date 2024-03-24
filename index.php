<?php

session_start();

if(isset($_SESSION['email'])) {
	header("Location: dashboard.php");
	exit;
}

$message = '';
if(isset($_SESSION['message'])){
	$message = $_SESSION['message'];
	unset($_SESSION['message']);
}

$title = "Login";
require_once 'includes/header.php';
?>

	
	<div class="row justify-content-md-center"> 

	<div class="col-md-6">
	<h2>Login</h2> 
	<form action="login.php" method="post">				

		<div class="mb-3">
		  <label for="email" class="form-label">Email address</label>
		  <input type="email" class="form-control" id="email" name="email" placeholder="abc@example.com">
		</div>

		<div class="mb-3">
		  <label for="password" class="form-label">Password</label>
		  <input type="password" class="form-control" id="password" name="password">
		</div>
		<div class="col-auto">
		    <button type="submit" class="btn btn-primary mb-3">Login</button>
		  </div>
	</form>	
	<?php echo $message ?>
	<p>Don't have an account <a href="register.php">Register</p>
	</div>
	</div>
<?php require_once 'includes/footer.php'; ?>