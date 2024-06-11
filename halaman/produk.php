<?php
require '../functions/functions.php';

session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

$produk = query("SELECT * FROM tb_produk");

// $kategori = query("SELECT * FROM tb_kategori");

// tombol search di klik
if (isset($_POST["cari"])) {
    $produk = cari($_POST['keyword']);
}

//sorting
if (isset($_POST["sort"])) {
    if ($_POST["sort"] === "old") {
        $produk = query("SELECT *, tb_kategori.id_kategori AS id FROM tb_produk JOIN tb_kategori ON tb_produk.id_kategori  = tb_kategori.id_kategori ORDER BY id_produk ASC");
    }

    if ($_POST["sort"] === "new") {
        $produk = query("SELECT *, tb_kategori.id_kategori AS id FROM tb_produk JOIN tb_kategori ON tb_produk.id_kategori  = tb_kategori.id_kategori ORDER BY id_produk DESC");
    }
};
//akhir sorting

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>

    <!-- link css -->
    <link rel="stylesheet" href="../css/produk.css">

    <!-- Link Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Js jquery -->
    <script src="../js/jquery-3.7.1.min.js"></script>

    <!-- js live search -->
    <script src="../js/script.js"></script>

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
                    <input class="form-control me-4" type="seacrh" name="keyword" placeholder="Search" autofocus autocomplete="off" id="keyword">
                    <button class="btn" type="submit" name="cari" id="tombol-cari">Search</button>
                </form>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="dasboard.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="kategori.php">Kategori </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="#">Produk </a>
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

    <!-- carousel -->
    <?php require "carousel.php"; ?>
    <!-- carousel end -->

    <!-- Teks -->
    <div class="teks">
        <h1>Rekomdasi Laptop Unggulan Dari Kami</h1>
        <p>Laptop ASUS yang dirancang dengan presisi sesuai gaya kamu dan fitur modern untuk meningkatkan produktivitas kamu.</p>
    </div>
    <!-- Teks End -->

    <!-- produk -->
    <form action="" method="post">
        <select id="sort" name="sort" onchange="this.form.submit();" style="margin-left: 65px; margin-top: 10px; width: 100px; border: 2px solid black; border-radius: 5px; font-weight: 500;">
            <?php if ($_POST["sort"] === "new") : ?>
                <option value="old">Terlama</option>
                <option value="new" selected>Terbaru</option>
            <?php else : ?>
                <option value="new">Terbaru</option>
                <option value="old" selected>Terlama</option>
            <?php endif; ?>
        </select>
        <!-- <button class="input-group-text btn btn-primary" id="basic-addon2">Cari Harga</button> -->
    </form>

    <form action="" method="post">
        <div class="card1" id="container">
            <?php foreach ($produk as $pro) : ?>
                <div class="card cd1">
                    <img src="../img/<?= $pro["image"]; ?>" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><?= $pro["ukuran"]  ?></p>
                        <h5 class="card-title"><?= $pro["nama_produk"]  ?></h5>
                    </div>
                    <ul class="list-group list-group-flush ul1">
                        <p class="p1">Harga Mulai</p>
                        <h5 class="h52"><?= $pro["harga"]  ?></h5>
                        <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p>
                    </ul>
                    <ul class="list-group list-group-flush ul2">
                        <li>
                            <p class="p1"><?= $pro["deskripsi"]  ?></p>
                        </li>
                        <?php
                        $pro2 = $pro["deskripsi_2"];
                        $pro_2 = explode(",", $pro2);
                        ?>
                        <?php foreach ($pro_2 as $proo) : ?>
                            <li>
                                <p class="p2"><?= $proo; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
    <!-- Produk End -->

    <!-- footer -->
    <?php require "footer.php"; ?>
    <!-- footer end -->

    <!-- Js BOxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>