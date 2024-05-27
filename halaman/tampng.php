<form action="" method="post">
    <div class="card1" id="vivobook-s">
        <?php foreach ($deskripsi as $desk) : ?>
            <div class="card cd1">
                <img src="../img/<?= $desk["gambar"]; ?>" class="card-img-top">
                <div class="card-body">
                    <p class="card-text"><?= $desk["ukuran"]  ?></p>
                    <h5 class="card-title"><?= $desk["nama"]  ?></h5>
                </div>
                <ul class="list-group list-group-flush ul1">
                    <p class="p1">Harga Mulai</p>
                    <h5 class="h52"><?= $desk["harga"]  ?></h5>
                    <p class="p2">Harga ini mungkin tidak merujuk ke spesifikasi di bawah ini.</p>
                </ul>
                <ul class="list-group list-group-flush ul2">
                    <li>
                        <p class="p1"><?= $desk["deskripsi"]  ?></p>
                    </li>
                    <li>
                        <?php
                        $desk2 = $desk["deskripsi_2"];
                        $desk_2 = explode(",", $desk2);
                        ?>
                        <?php foreach ($desk_2 as $dess) : ?>
                            <p class="p2"><?= $dess; ?></p>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</form>