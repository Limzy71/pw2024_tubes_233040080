<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

require '../functions/functions.php';

//ambil id dari URL
$id = $_GET['id'];

// query kategori berdasrkan id
$ktg = query("SELECT * FROM tb_produk WHERE id_kategori = $id");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Produk</title>

  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- link css -->
  <link rel="stylesheet" href="../css/produk.css">

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

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-3">

          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="dasboard.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="kategori.php">Kategori </a>
          </li>


          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="produk.php">Produk </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='bx bxs-user fs-4'></i>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- nav end -->

  <!-- Carousel -->
  <?php require "carousel.php"; ?>
  <!-- carousel End -->

  <!-- Teks -->
  <div class="teks">
    <h1>Detail Produk</h1>
  </div>
  </form>
  <!-- Teks End -->

  <!-- produk -->
  <div class="card1">
    <?php foreach ($ktg as $k) : ?>
      <div class="card cd1">
        <img src="../img/<?= $k['image']; ?>" class="card-img-top">
        <div class="card-body">
          <p class="card-text"><?= $k["ukuran"];  ?></p>
          <h5 class="card-title"><?= $k["nama_produk"]  ?></h5>
        </div>
        <ul class="list-group list-group-flush ul1">
          <p class="p1">Harga Mulai</p>
          <h5 class="h52"><?= $k["harga"];  ?></h5>
          <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p>
        </ul>
        <ul class="list-group list-group-flush ul2">
          <li>
            <p class="p1"><?= $k["deskripsi"];  ?></p>
          </li>
          <?php
          $ktg2 = $k["deskripsi_2"];
          $ktg2 = explode(",", $ktg2);
          ?>
          <?php foreach ($ktg2 as $kt) : ?>
            <li>
              <p class="p2"><?= $kt; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Produk End -->

  <!-- button -->
  <div class="btn2">
    <a href="kategori.php"><button>Kembali Ke Kategori</button></a>
  </div>
  <!-- button End -->

  <!-- footer -->
  <?php require "footer.php"; ?>
  <!-- footer end -->

  <!-- Js BOxicons -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>