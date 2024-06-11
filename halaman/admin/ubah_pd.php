<?php
require '../../functions/functions.php';

// ambil id dari URL
$id = $_GET['id'];

$produk = query("SELECT * FROM tb_produk WHERE id_produk = $id")[0];

// apakah tombol ubah sudah ditekan atau belum
if (isset($_POST['ubah'])) {
  // cek apakah data berhasil di ubah atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'pd_admin.php';
    </script>";
  } else {
    echo "<script>
            alert('data gagal diubah!');
            document.location.href = 'pd_admin.php';
          </script>";
  }
}

$kategori = query("SELECT * FROM tb_kategori");

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
              <li><a class="dropdown-item" href="tambah_pd.php">Tambah Produk</a></li>
              <li><a class="dropdown-item" href="tambah_kg.php">Tambah Kategori</a></li>
              <li><a class="dropdown-item" href="">Kelola User</a></li>
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
              <i type='solid' class='bx bxs-user-check fs-3'></i>
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
    <h3 class="h3">Ubah Daftar Produk</h3>

    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $produk['id_produk']; ?>">
      <input type="hidden" name="gambarLama" value="<?= $produk['image']; ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Kategori</label>
        <select type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
          <?php foreach ($kategori as $k) : ?>
            <option value="<?= $k["id_kategori"]; ?>"><?= $k["nama_kategori"]; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $produk['nama_produk']; ?>" autocomplete="off" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga']; ?>" autocomplete="off" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Ukuran</label>
        <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= $produk['ukuran']; ?>" autocomplete="off" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="5" autocomplete="off" required><?= $produk['deskripsi'] ?></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Deskripsi 2</label>
        <textarea class="form-control" name="deskripsi2" rows="6" autocomplete="off" required><?= $produk['deskripsi_2'] ?></textarea>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label"><i class='bx bxs-folder-open fs-1'></i></label>
        <img src="../../img/<?= $produk['image']; ?>" width="120">
        <input type="file" class="form-control-file" id="gambar" name="gambar">
      </div>
      <button type="submit" id="ubah" name="ubah" class="btn btn-primary">Ubah data</button>
    </form>
  </div>
  <!-- tabel End -->

  <!-- Js BOxicons -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>