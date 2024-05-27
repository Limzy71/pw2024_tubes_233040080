<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040080');
}

function query($query)
{
  $conn = koneksi(); //koneksi

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  } //array numerik

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = $data['nama'];
  $harga = $data['harga'];
  $ukuran = $data['ukuran'];
  $deskripsi = $data['deskripsi'];
  $deskripsi2 = $data['deskripsi2'];
  $gambar = $data['gambar'];

  $query = "INSERT INTO 
            tb_produk (nama_produk, ukuran, harga, deskripsi, deskripsi_2, image)
          VALUES
            ('$nama', '$ukuran', '$harga', '$deskripsi', '$deskripsi2', '$gambar')
    ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function result($data) {
  $conn = koneksi();
}

// Registrasi
function Registrasi($data)
{
  $conn = koneksi();

  // variabel data
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $email = strtolower($data["email"]);

  // cek username udah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('username telah terdaftar')
          </script>";
    return false;
  }

  //enkrpsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah user baru ke DB
  $query = "INSERT INTO
              user
            VALUES
            (null, '$username', '$password', '$email')
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// login
function login($data)
{
  $conn = koneksi();

  $username = $data["username"];
  $password = $data["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      header("location: dasboard utama.php");
      exit;
    }
  }
}
