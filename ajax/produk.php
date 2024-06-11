<?php
require '../functions/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM tb_produk 
            WHERE
              nama_produk LIKE '%$keyword%' OR
              ukuran LIKE '%$keyword%'
          ";

$produk = query($query);

?>

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