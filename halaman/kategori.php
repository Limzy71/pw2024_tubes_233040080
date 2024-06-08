<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require '../functions/functions.php';

$kategori = query("SELECT * FROM tb_kategori");

// tombol search di klik
if (isset($_POST["search"])) {
    $kategori = search($_POST['kunci']);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kategori</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="../css/kategori.css">

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
                <form class="d-flex" role="search" action="" method="post">
                    <input class="form-control me-4" type="text" name="kunci" autofocus placeholder="Search" autocomplete="off">
                    <button class="btn" type="submit" name="search">Search</button>
                </form>
            </div>

            <div class="pdf">
                <a href="../pdf/pdf.php" target="_blank"><i class='bx bxs-file-pdf'></i></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="dasboard.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="#">Kategori </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="produk.php">Produk </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <box-icon type='solid' name='user'></box-icon>
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
        <h1>All Kategori</h1>
    </div>
    <!-- Teks End -->

    <!-- produk -->
    <div class="produk">
        <?php foreach ($kategori as $k) : ?>
            <div class="card cd">
                <h5 class="card-title"><?= $k["nama_kategori"]; ?></h5>
                <img src="../img/<?= $k["gambar"]; ?>" class="card-img-top">
                <div class="card-body">
                    <a href="detail.php?id=<?= $k["id_kategori"]; ?>" class="btn ">Lihat Semua</a>
                    <p class="card-text"><?= $k["deskripsi"] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Produk End -->

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