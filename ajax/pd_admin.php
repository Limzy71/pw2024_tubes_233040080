<?php
require '../functions/functions.php';

$key = $_GET["key"];

$query = "SELECT * FROM tb_produk 
            WHERE
              nama_produk LIKE '%$key%' OR
              ukuran LIKE '%$key%' OR
              harga LIKE '%$key%'
          ";

$produk = query($query);

?>

<div class="list">
  <a href="../halaman/admin/tambah_pd.php" class="btn btn-primary" style="margin-left: 30px; ">Tambah Data Produk</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col">Ukuran</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Deskripsi_2</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($produk as $pro) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $pro['nama_produk']; ?></td>
          <td><img src="../img/<?= $pro['image']; ?>" width="110"></td>
          <td><?= $pro['harga']; ?></td>
          <td><?= $pro['ukuran']; ?></td>
          <td><?= $pro['deskripsi']; ?></td>
          <td class="d2"><?= $pro['deskripsi_2']; ?></td>
          <td class="tombol">
            <a href="../halaman/admin/ubah_pd.php?id=<?= $pro['id_produk']; ?>" class="badge text-bg-warning text-decoration-none">Ubah</a>
            <a href="../halaman/admin/hapus_pd.php?id=<?= $pro['id_produk']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="badge text-bg-danger text-decoration-none">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>