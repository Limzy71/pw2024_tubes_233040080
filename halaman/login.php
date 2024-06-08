<?php
require '../functions/functions.php';

session_start();

if (isset($_SESSION["login"])) {
  header("location: dasboard.php");
  exit;
}

if (isset($_POST["login"])) {
  $role = login($_POST);

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <!-- Css -->
  <link rel="stylesheet" href="../css/login.css">

  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <form action="" method="post">
    <div class="form-box">
      <!-- Login Form -->
      <div class="login-container">
        <div class="top">
          <span>Don't have an account? <a href="register.php">Sign Up</a></span>
          <?php if (isset($error)) : ?>
            <h5>Username / Password salah</h5>
          <?php endif; ?>
          <header>Login</header>
        </div>
        <div class="input-box">
          <input type="text" class="input-field" placeholder="Username" name="username" id="username" autofocus autocomplete="off" required>
          <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
          <input type="password" class="input-field" placeholder="Password" name="password" id="password" autocomplete="off" required>
          <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
          <button class="submit" type="submit" name="login">Submit</button>
        </div>
        <div class="two-col">
          <div class="one">
            <input type="checkbox" id="login-check" name="remember">
            <label for="login-check"> Remember Me</label>
          </div>
          <div class="two">
            <label><a href="#">Forgot password?</a></label>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Login Form End -->

</body>

</html>