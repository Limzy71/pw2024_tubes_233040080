<?php
// require "../functions/functions.php";

session_start();

if (isset($_SESSION["login"])) {
    header("location: dasboard.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasboard</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="../css/dasbord.css">

    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-lg-top">
        <div class="container nav">
            <img src="../img/logo asus1.png" alt="Logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="login.php">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="login.php">Produk</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <box-icon name='user'></box-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel -->
    <?php require "carousel.php"; ?>
    <!-- carousel End -->

    <!-- Teks -->
    <div class="teks1">
        <h1>The ASUS</h1>
        <p>ASUS, sebuah perusahaan yang berorientasi pada teknologi dengan staf global lebih dari sepuluh ribu orang dan diberkati dengan salah satu tim R&D terbaik dunia, terkenal dengan produk-produk berkualitas tinggi dan inovasi mutakhir. Sebagai perusahaan terdepan di era digital baru, ASUS menawarkan portofolio produk lengkap untuk bersaing di milenium baru.</p>
    </div>

    <div class="teks2">
        <h5>Visi perusahaan</h5>
        <p>ASUS terus berupaya untuk menjadi penyedia solusi 3C terintegrasi (Komputer, Komunikasi, Elektronik konsumen) yang memberikan inovasi yang menyederhanakan kehidupan pelanggan kami dan memungkinkan mereka mewujudkan potensi penuh mereka. Produk ASUS mewakili teknologi terbaik yang ditawarkan, memberikan kinerja dan estetika luar biasa yang mengakomodasi semua gaya hidup, kapan saja, di mana saja.</p>
    </div>

    <div class="teks3">
        <h5>Misi dan Filsafat</h5>
        <p>Sebagai pemain utama dalam industri TI, misi perusahaan ASUS adalah menyediakan solusi TI inovatif yang memberdayakan masyarakat dan bisnis untuk mencapai potensi maksimal mereka. Filosofi ASUS di balik pengembangan produk yaitu menyelesaikan hal-hal mendasar terlebih dahulu sebelum melangkah maju—telah menghasilkan tulang punggung komponen komputer yang dapat diandalkan seperti motherboard, kartu grafis, dan perangkat penyimpanan optik. ASUS kini memiliki lebih dari 16 lini produk, termasuk produk Eee yang mendefinisikan ulang industri, sistem barebone desktop, server, notebook, perangkat genggam, perangkat jaringan, komunikasi broadband, monitor LCD, TV, aplikasi nirkabel, dan CPT (sasis, catu daya, dan termal). produk.</p>
    </div>
    <!-- Teks End -->

    <!-- Gambar -->
    <div class="gambar">
        <img src="../img/pendiri asus.jpg" alt="1">
    </div>
    <!-- Gambar End -->

    <!-- footer -->
    <?php require "footer.php"; ?>
    <!-- footer end -->

    <!-- Js BOxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>