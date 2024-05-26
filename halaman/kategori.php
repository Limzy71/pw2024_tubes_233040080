
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
                        <a class="nav-link a1" aria-current="page" href="produk.php">Produk </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="#">Kategori </a>
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

    <!-- Carousel -->
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
    <!-- carousel End -->

    <!-- Teks -->
    <div class="teks">
        <h1>Asus Vivobook</h1>
    </div>
    <!-- Teks End -->

    <!-- produk -->
    <div class="card1" id="vivobook-s">
    <div class="card cd1">
        <img src="../img/Vivobook S14 Flip.jpg" class="card-img-top" alt="1">
        <div class="card-body">
            <p class="card-text">14"</p>
            <h5 class="card-title">Vivobook S 14 OLED (K3402,12th Gen Intel)</h5>
        </div>
        <ul class="list-group list-group-flush ul1">
            <p class="p1">Harga Mulai</p>
            <h5 class="h52">Rp 9.999.000</h5>
            <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p>
        </ul>
        <ul class="list-group list-group-flush ul2">
            <li>
                <p class="p1">Windows 11 Home - ASUS recommends Windows 11 Pro for business</p>
            </li>
            <li>
                <p class="p2">Up to 12th Intel® Core™ i7 processo</p>
            </li>
            <li>
                <p class="p2">Up to 16 GB memory</p>
            </li>
            <li>
                <p class="p2">Up to 1 TB SSD storage</p>
            </li>
            <li>
                <p class="p2">Up to 14'' 2.8K OLED NanoEdge display</p>
            </li>
            <li>
                <p class="p2">Pantone validated</p>
            </li>
            <li>
                <p class="p2">ASUS Antibacterial Guard</p>
            </li>
            <li>
                <p class="p2">WiFi 6E (802.11ax)</p>
            </li>
        </ul>
    </div>
</div>

    <!-- <div class="produk"> -->
    <!-- <div class="card pd"> -->
    <!-- <h5 class="card-title">Zenbook xx</h5> -->
    <!-- <div class="card-body"> -->
    <!-- <img src="img dasboard/Card Zenbook pro.jpg" class="card-img-top" alt="2"> -->
    <!-- <div class="link"> -->
    <!-- <a href="../login.php" class="card-link">Lihat semua ></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="card"> -->
    <!-- <h5 class="card-title">Zenbook S</h5> -->
    <!-- <div class="card-body"> -->
    <!-- <img src="img dasboard/Card Zenbook S.jpg" class="card-img-top" alt="2"> -->
    <!-- <div class="link"> -->
    <!-- <a href="../login.php" class="card-link">Lihat semua ></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="card"> -->
    <!-- <h5 class="card-title h5cd">Zenbook Flip</h5> -->
    <!-- <div class="card-body"> -->
    <!-- <img src="img dasboard/Card Zenbook Flip.jpg" class="card-img-top cr3" alt="3"> -->
    <!-- <div class="link"> -->
    <!-- <a href="../login.php" class="card-link">Lihat semua ></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- Produk End -->

    <!-- Footer -->
    <div class="footer">
        <p>©ASUSTeK Computer Inc. All rights reserved</p>
    </div>
    <!-- Footer End -->

    <!-- Js BOxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>