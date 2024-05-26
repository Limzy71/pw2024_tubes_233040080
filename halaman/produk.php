<?php

require '../functions/functions.php';

$produk = query("SELECT * FROM tb_produk");
// koneksi ka DB
// $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040080');

// Ambil data dari tabel
// $result = mysqli_query($conn, "SELECT * FROM tb_produk");

// while ($produk = mysqli_fetch_assoc($result)) {
// var_dump($produk);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUK</title>

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
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/carousel 1.jpg" class="d-block w-100" style="height: 576px;">
            </div>
            <div class="carousel-item">
                <img src="../img/carousel 2.jpg" class="d-block w-100" style="height: 576px;">
            </div>
            <div class="carousel-item">
                <img src="../img/carousel 3.jpg" class="d-block w-100" style="height: 576px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->

    <!-- Teks -->
    <div class="teks" id="all-series">
        <h1>Rekomdasi Laptop Unggulan Dari Kami</h1>
        <p>Laptop ASUS yang dirancang dengan presisi sesuai gaya kamu dan fitur modern untuk meningkatkan produktivitas kamu.</p>
    </div>
    <!-- Teks End -->

    <!-- produk -->
    <div class="produk">
        <?php foreach ($produk as $pd) : ?>
            <div class="card cd">
                <h5 class="card-title"><?= $pd["nama_produk"]; ?></h5>
                <img src="../img/<?= $pd["image"]; ?>" class="card-img-top">
                <div class="card-body">
                    <a href="#" class="btn ">Lihat Semua</a>
                    <p class="card-text"><?= $pd["deskripsi"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- link -->
    <div class="tambah">
        <!-- <button><a href="">Tambah Data</a></button> -->
        <a href="tambah.php"><button>Tambah Produk</button></a>
    </div>
    <!-- link end -->

    <!-- <div class="card cd2"> -->
    <!-- <img src="img produk/vivobook S14/vivobook s14 flip.jpg" class="card-img-top" alt="1"> -->
    <!-- <div class="card-body"> -->
    <!-- <p class="card-text">14"</p> -->
    <!-- <h5 class="card-title">Vivobook S 14 Flip (TN3402)</h5> -->
    <!-- </div> -->
    <!-- <ul class="list-group list-group-flush ul11"> -->
    <!-- <p class="p1">Harga Mulai</p> -->
    <!-- <h5>Rp 10.699.000</h5> -->
    <!-- <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p> -->
    <!-- </ul> -->
    <!-- <ul class="list-group list-group-flush ul2"> -->
    <!-- <li> -->
    <!-- <p class="p1">Windows 11 Home - ASUS recommends Windows 11 Pro for business</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to AMD Ryzen™ 7 5800H Mobile Processor</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 16 GB memory</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 1 TB SSD storage</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 14'' 3-sided NanoEdge display</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">360° hinge convertible laptop</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Optional ASUS Pen2.0 support</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">WiFi 6 (802.11ax)</p> -->
    <!-- </li> -->
    <!-- </ul> -->
    <!-- </div> -->

    <!-- <div class="card cd2"> -->
    <!-- <img src="img produk/vivobook S14/vivobook s14 flip oled.jpg" class="card-img-top" alt="1"> -->
    <!-- <div class="card-body"> -->
    <!-- <p class="card-text">14"</p> -->
    <!-- <h5 class="card-title">Vivobook S 14 Flip OLED (TP3402)</h5> -->
    <!-- </div> -->
    <!-- <ul class="list-group list-group-flush ul1"> -->
    <!-- <p class="p1">Harga Mulai</p> -->
    <!-- <h5>Rp 14.499.000</h5> -->
    <!-- <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p> -->
    <!-- </ul> -->
    <!-- <ul class="list-group list-group-flush ul2"> -->
    <!-- <li> -->
    <!-- <p class="p1">Windows 11 Home - ASUS recommends Windows 11 Pro for business</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 12th Intel® Core™ i7 processor</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 16 GB memory</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 1 TB SSD storage</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 14'' 2.8K OLED NanoEdge display</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">90 Hz refresh rate</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">360° hinge convertible laptop</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">ptional ASUS Pen2.0 support</p> -->
    <!-- </li> -->
    <!-- </ul> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- Vivobook Pro -->
    <!--  -->
    <!-- <div class="card2" id="vivobook-pro"> -->
    <!-- <div class="card cd1"> -->
    <!-- <img src="img produk/vivobook pro/vivobook pro 15.jpg" class="card-img-top" alt="1"> -->
    <!-- <div class="card-body"> -->
    <!-- <p class="card-text">15.6"</p> -->
    <!-- <h5 class="card-title">Vivobook Pro 15 OLED (K6502)</h5> -->
    <!-- </div> -->
    <!-- <ul class="list-group list-group-flush ul1"> -->
    <!-- <p class="p1">Harga Mulai</p> -->
    <!-- <h5>Rp 14.499.000</h5> -->
    <!-- <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p> -->
    <!-- </ul> -->
    <!-- <ul class="list-group list-group-flush ul2"> -->
    <!-- <li> -->
    <!-- <p class="p1">Windows 11 Home - ASUS recommends Windows 11 Pro for business</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 12th gen Intel® Core™ i7 H-series processor</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to NVIDIA® GeForce® RTX 3050 Ti</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 15.6’’ 2.8K 120 Hz OLED display</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Thunderbolt™ 4 USB-C® port</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 16 GB memory</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 1 TB PCIe® 4.0 SSD storage</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Dolby Atmos</p> -->
    <!-- </li> -->
    <!-- </ul> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="card cd2"> -->
    <!-- <img src="img produk/vivobook pro/asus vivobook 15.jpg" class="card-img-top" alt="1"> -->
    <!-- <div class="card-body"> -->
    <!-- <p class="card-text">15.6"</p> -->
    <!-- <h5 class="card-title">ASUS Vivobook Pro 15 OLED (M6500, AMD Ryzen™ 5000 Series Mobile Processor)</h5> -->
    <!-- </div> -->
    <!-- <ul class="list-group list-group-flush ul1"> -->
    <!-- <p class="p1">Harga Mulai</p> -->
    <!-- <h5>Rp 12.599.000</h5> -->
    <!-- <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p> -->
    <!-- </ul> -->
    <!-- <ul class="list-group list-group-flush ul2"> -->
    <!-- <li> -->
    <!-- <p class="p1">Windows 11 Home - ASUS recommends Windows 11 Pro for business</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 12th gen Intel® Core™ i7 processor</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to NVIDIA® GeForce® RTX 3050 Ti</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 16 GB memory</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 1 TB PCIe® 3.0 SSD storage</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">15.6’’ 2.8K 120 Hz OLED laptop</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">ASUS Antibacterial Guard</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">3DNR webcam with FHD camera</p> -->
    <!-- </li> -->
    <!-- </ul> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="card cd2"> -->
    <!-- <img src="img produk/vivobook pro/asus vivobook pro 16x.jpg" class="card-img-top" alt="1"> -->
    <!-- <div class="card-body"> -->
    <!-- <p class="card-text">16"</p> -->
    <!-- <h5 class="card-title">ASUS Vivobook Pro 16X OLED (K6604)</h5> -->
    <!-- </div> -->
    <!-- <ul class="list-group list-group-flush ul1"> -->
    <!-- <p class="p1">Harga Mulai</p> -->
    <!-- <h5>Rp 30.999.000</h5> -->
    <!-- <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p> -->
    <!-- </ul> -->
    <!-- <ul class="list-group list-group-flush ul2"> -->
    <!-- <li> -->
    <!-- <p class="p1">Windows 11 Home - ASUS recommends Windows 11 Pro for business</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to Intel® Core™ i9 HX55 processor</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to NVIDIA® GeForce RTX 4070 GPU</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 3.2K 120 Hz OLED display</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 64 GB DDR5 with dual SO-DIMM</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Up to 2 TB SSD with one M.2 Slot</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">ASUS IceCool Pro thermal technology</p> -->
    <!-- </li> -->
    <!-- <li> -->
    <!-- <p class="p2">Dual Thunderbolt™ 4 for up to 40Mbps</p> -->
    <!-- </li> -->
    <!-- </ul> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- Vivobook Pro End -->

    <!-- Zenbook Flip -->

    <!-- Zenbook Flip End -->
    <!-- Produk End -->

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