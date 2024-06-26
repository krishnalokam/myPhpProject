<?php
session_start();

require_once 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $rs = mysqli_query($con,"Select * from users where email = '$email' and password = '".md5($password)."'");


    if (mysqli_num_rows($rs)>0) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['message'] = "<p style='color:red'>Invalid email or password. Please try again </p>";
        header("Location: login.php");
        exit;
    }
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
    <form action="" method="post">             

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

<?php 
require_once 'includes/footer.php';
?>