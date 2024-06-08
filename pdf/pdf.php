<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: ../halaman/login.php");
    exit;
}

require_once __DIR__ . '../../vendor/autoload.php';

require '../functions/functions.php';

$kategori = query("SELECT * FROM tb_kategori");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Reporting</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../css/pdf.css">

</head>

<body>
    <h1 class="teks">Daftar Kategori</h1>
  
  <table class="table" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th class="nm">Nama Kategori</th>
      <th class="gm">Gambar</th>
      <th class="ds">Deskripsi</th>
  </tr>';

$i = 1;
foreach ($kategori as $k) {
  $html .= '<tr>
                <td class="no">' . $i++ . '</td>
                <td class="nmk">' . $k["nama_kategori"] . '</td>
                <td class="gm"><img src="../img/' . $k["gambar"] . '" width="100"></td>
                <td class="dsk">' . $k["deskripsi"] . '</td>
              </tr>';
}

$html .= '</table>
  

</body>

</html>';



$mpdf->WriteHTML($html);
$mpdf->Output('Daftar Kategori.pdf', 'D');
