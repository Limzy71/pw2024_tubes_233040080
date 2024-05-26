<?php

require '../functions/functions.php';

$produk = query("SELECT * FROM tb_produk");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Produk</title>

  <!-- link css -->
  <link rel="stylesheet" href="../css/produk.css">

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-lg-top">
    <div class="container nav">
      <img src="../img/logo asus1.png" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-fluid srh">
        <form class="d-flex" role="search">
          <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
          <button class="btn" type="submit">Search</button>
        </form>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-3">
          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="dasboard utama.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active a1" aria-current="page" href="#">Produk </a>
          </li>


          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="kategori.php">Kategori </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <box-icon name='user'></box-icon>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="dasboard.php">Log Out</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- nav end -->

<!-- tabel -->
  <form action="" method="post">
  <ul>
    <li><input type="text" name="nama_produk"></li>
  </ul>

  </form>
<!-- tabel End -->

  <!-- Footer -->
  <div class="footer">
    <p>©ASUSTeK Computer Inc. All rights reserved</p>
  </div>
  <!-- Footer End -->

  <!-- Js BOxicons -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>