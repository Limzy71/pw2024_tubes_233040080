<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasboard Admin</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="../../css/dasbord.css">

    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-lg-top">
        <div class="container nav">
            <img src="../../img/logo asus1.png" alt="Logo">
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <box-icon name='menu'></box-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="kelola user.php">Kelola User</a></li>
                            <li><a class="dropdown-item" href="tambah pd.php">Tambah Produk</a></li>
                            <li><a class="dropdown-item" href="tambah kg.php">Tambah Kategori</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="kg admin.php">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="pd admin.php">Produk </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <box-icon type='solid' name='user-check'></box-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dasboard.php">Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- lihat detail -->
    <div class="lihat">
        <div class="detail">
            <i class='bx bxs-data'></i>
            <a class="a1" href="tambah pd.php">Tambah Produk</a>
            <a class="a2" href="pd admin.php">Lihat Produk</a>
        </div>

        <div class="detail">
            <i class='bx bxs-data'></i>
            <a class="a1" href="tambah kg.php">Tambah Kategori</a>
            <a class="a2" href="tambah kg.php">Lihat Kategori</a>
        </div>
    </div>
    <!-- Js BOxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>