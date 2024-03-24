<?php

$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';

$title = "Register";
require_once 'includes/header.php';

?>


	<div class="row justify-content-md-center"> 

	<div class="col-md-6">
	<h2>Register</h2>
	<form action="register_process.php" method="post">
		<div class="mb-3">
		  <label for="email" class="form-label">Email address</label>
		  <input type="email" class="form-control" id="email" name="email" placeholder="abc@example.com">
		</div>

		<div class="mb-3">
		  <label for="password" class="form-label">Password</label>
		  <input type="password" class="form-control" id="password" name="password">
		</div>
		<div class="col-auto">
		    <button type="submit" class="btn btn-primary mb-3">Register</button>
		  </div>
	</form>
	<?php echo $message; ?>
	<p>Already have an account? <a href="index.php"> Login here</a></p>
	</div>
	</div>
<?php require_once 'includes/footer.php'; ?>