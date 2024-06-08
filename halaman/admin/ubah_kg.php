<?php
require '../../functions/functions.php';
$id = $_GET['id'];

$kategori = query("SELECT * FROM tb_kategori WHERE id_kategori = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah2($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'kg_admin.php';
    </script>";
  } else {
    echo "<script>
            alert('data gagal diubah!');
            document.location.href = 'kg_admin.php';
          </script>";
  }
}

session_start();
if (!isset($_SESSION["login"])) {
  header("location: ../login.php");
  exit;
}

if ($_SESSION["role"] !== "admin") {
  header("location: ../dasboard.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Daftar Produk</title>

  <!-- link css -->
  <link rel="stylesheet" href="../../css/tambah.css">
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
              <li><a class="dropdown-item" href="tambah_kg.php">Tambah Kategori</a></li>
              <li><a class="dropdown-item" href="dasboard.php">Kelola User</a></li>
              <li><a class="dropdown-item" href="tambah_pd.php">Tambah Produk</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="../admin/admin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="../admin/kg_admin.php">Kategori </a>
          </li>
          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="../admin/pd_admin.php">Produk </a>
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

  <div class="container col-6 tb">
    <h3 class="h3">Ubah Daftar Kategori</h3>

    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
      <input type="hidden" name="gambarLama" value="<?= $kategori['gambar']; ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $kategori['nama_kategori']; ?>" autocomplete="off" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $kategori['deskripsi']; ?>" autocomplete="off" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label"><i class='bx bxs-folder-open fs-1'></i></label>
        <img src="../../img/<?= $kategori['gambar']; ?>" width="120">
        <input type="file" class="form-control-file" id="gambar" name="gambar">
      </div>
      <button type="submit" name="ubah" class="btn btn-primary">Ubah data</button>
    </form>
  </div>
  <!-- tabel End -->

  <!-- Js BOxicons -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>