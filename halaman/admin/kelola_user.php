<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

if ($_SESSION["role"] !== "admin") {
    header("location: ../dasboard.php");
    exit;
}

require '../../functions/functions.php';

$user = query("SELECT * FROM user");

// tombol search di klik
if (isset($_POST["pilih"])) {
    $user = pilih3($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUK</title>

    <!-- link css -->
    <link rel="stylesheet" href="../../css/produk.css">

    <!-- Link Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-lg-top">
        <div class="container nav">
            <img src="../../img/logo asus1.png" alt="Logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <box-icon name='menu'></box-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kelola User</a></li>
                            <li><a class="dropdown-item" href="tambah_pd.php">Tambah Produk</a></li>
                            <li><a class="dropdown-item" href="tambah_kg.php">Tambah Kategori</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="admin.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="kg_admin.php">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a1" aria-current="page" href="pd_admin.php">Produk </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <box-icon type='solid' name='user-check'></box-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../logout.php">Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- Teks -->
    <div class="teks3">
        <h1>Daftar User</h1>
    </div>
    <!-- Teks End -->

    <!-- cari -->
    <form class="frm-user" action="" method="post">
        <input type="text" name="keyword" size="35" autofocus autocomplete="off" placeholder="Search">
        <button type="submit" name="pilih">Cari</button>
    </form>
    <!-- cari end -->

    <!-- produk -->
    <div class="list-user">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($user as $u) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $u['username']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td><?= $u['role']; ?></td>
                        <td class="tombol">
                            <a href="hapus_user.php?id=<?= $u['id_user']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="badge text-bg-danger text-decoration-none">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Produk End -->

    <!-- Js BOxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>