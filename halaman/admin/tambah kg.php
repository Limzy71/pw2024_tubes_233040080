<?php

require '../../functions/functions.php';

//Jika tombol tambah ditekan
if (isset($_POST['tambah'])) {
  //Jika data berhasil ditambahakan
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambah!');
      document.location.href = 'pd admin.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal ditambah!');
    document.location.href = 'tambah pd.php';
</script>";
  }
}

// $produk = query("SELECT * FROM tb_produk");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Produk</title>

  <!-- link css -->
  <!-- <link rel="stylesheet" href="../../css/tambah.css"> -->
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
              <box-icon type='solid' name='user-check'></box-icon>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tambah Produk</a></li>
              <li><a class="dropdown-item" href="dasboard.php">Kelola User</a></li>
              <li><a class="dropdown-item" href="dasboard.php">Tambah Kategori</a></li>
              <li><a class="dropdown-item" href="dasboard.php">Log Out</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="dasboard utama.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="../admin/pd admin.php">Produk </a>
          </li>


          <li class="nav-item">
            <a class="nav-link a1" aria-current="page" href="kategori.php">Kategori </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- nav end -->

  <!-- tabel -->
  <div class="container col-6 tb">
    <h3 class="h3">Tambah Daftar Produk</h3>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Ukuran</label>
        <input type="text" class="form-control" id="ukuran" name="ukuran" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Deskripsi 2</label>
        <input type="text" class="form-control" id="deskripsi2" name="deskripsi2" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Gambar</label>
        <input type="file" class="form-control-file" id="gambar" name="gambar" required>
      </div>
      <button type="submit" name="tambah" class="btn btn-primary">tambah data</button>
    </form>
  </div>
  <!-- tabel End -->

  <!-- Js BOxicons -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>