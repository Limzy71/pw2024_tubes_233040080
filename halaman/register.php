<?php
require '../functions/functions.php';

// Apakah tomboh sudah di tekan
if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Akun Anda berhasil dibuat!');
            document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
        alert('Akun Anda gagal dibuat!');
            document.location.href = 'register.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!-- Css -->
    <link rel="stylesheet" href="../css/login.css">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <form action="" method="post">
        <div class="form-box">
            <div class="register-container" id="register">
                <div class="top2">
                    <span>Have an account? <a href="login.php">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Username" name="username" id="username" autofocus autocomplete="off" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" name="email" id="email" autocomplete="off" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="password" id="password" autocomplete="off" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <button class="submit" type="submit" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>