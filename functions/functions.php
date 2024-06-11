<?php

function koneksi()
{
  return mysqli_connect('localhost', 'id22300754_limzy', '#Pomalaa4', 'id22300754_pw2024_tubes_233040080');
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

// Function tambah produk
function tambah($data)
{
  $conn = koneksi();

  $id = $data['nama_kategori'];
  $nama = $data['nama'];
  $harga = $data['harga'];
  $ukuran = $data['ukuran'];
  $deskripsi = $data['deskripsi'];
  $deskripsi2 = $data['deskripsi2'];

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
            tb_produk
          VALUES
            (null, '$id', '$nama', '$ukuran', '$harga', '$deskripsi', '$deskripsi2', '$gambar')
    ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// ubah data produk
function ubah($data)
{
  $conn = koneksi();

  // ubah produk
  $id = $data['id'];
  $nama = $data['nama'];
  $harga = $data['harga'];
  $ukuran = $data['ukuran'];
  $deskripsi = $data['deskripsi'];
  $deskripsi2 = $data['deskripsi2'];
  $gambarLama = ($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  // query produk
  $query = "UPDATE tb_produk SET
        nama_produk = '$nama',
        harga = '$harga',
        ukuran = '$ukuran',
        deskripsi = '$deskripsi',
        deskripsi_2 = '$deskripsi2',
        image = '$gambar'
      WHERE id_produk= $id
      ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// function hapus produk
function hapus($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM tb_produk WHERE id_produk = $id");

  return mysqli_affected_rows($conn);
}

// Function tambah kategori
function submit($data)
{
  $conn = koneksi();

  $nama = $data['nama'];

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $deskripsi = $data['deskripsi'];

  $query = "INSERT INTO 
          tb_kategori
        VALUES
          (null, '$nama', '$gambar', '$deskripsi')
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// ubah data kategori
function ubah2($data)
{
  $conn = koneksi();

  // ubah kategori
  $id = $data['id_kategori'];
  $nama = $data['nama'];
  $deskripsi = $data['deskripsi'];
  $gambarLama = ($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak kategori
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  // query kategori
  $queryy = "UPDATE tb_kategori SET
      nama_kategori = '$nama',
      deskripsi_kg = '$deskripsi',
      gambar = '$gambar'
    WHERE id_kategori = $id
    ";

  mysqli_query($conn, $queryy);
  return mysqli_affected_rows($conn);
}

// function hapus kategori
function hapus2($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM tb_kategori WHERE id_kategori = $id");

  return mysqli_affected_rows($conn);
}

// function hapus user
function hapus3($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");

  return mysqli_affected_rows($conn);
}

// function upload
function upload()
{
  $namaFile = $_FILES["gambar"]['name'];
  $ukuranFile = $_FILES["gambar"]['size'];
  $error = $_FILES["gambar"]['error'];
  $tmpName = $_FILES["gambar"]['tmp_name'];

  // Cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }

  // Cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
    return false;
  }

  // Cek jika ukurannya terlalu besar
  if ($ukuranFile > 4000000) {
    echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // Generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  // Lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, "D:/APK/Laragon/www/pw2024_tubes_233040080/img/" . $namaFileBaru);

  return $namaFileBaru;
}

// function search produk user
function cari($keyword)
{

  $query = "SELECT * FROM tb_produk 
            WHERE
              nama_produk LIKE '%$keyword%' OR
              ukuran LIKE '%$keyword%'
            ";

  return query($query);
}

// function search kategori user
function search($kunci)
{

  $query = "SELECT * FROM tb_kategori 
          WHERE
            nama_kategori LIKE '%$kunci%'
          ";

  return query($query);
}

// function search produk admin
function pilih($keyword)
{

  $query = "SELECT * FROM tb_produk
            WHERE
              nama_produk LIKE '%$keyword%' OR
              ukuran LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
            ";

  return query($query);
}

// function search kategori admin
function pilih2($keyword)
{

  $query = "SELECT * FROM tb_kategori
            WHERE
              nama_kategori LIKE '%$keyword%'
            ";

  $result = query($query);
  return $result;
}

// function search kelola user admin
function pilih3($keyword)
{

  $query = "SELECT * FROM user
            WHERE
              username LIKE '%$keyword%' OR
              role LIKE '%$keyword%'
            ";

  return query($query);
}

// Registrasi
function Registrasi($data)
{
  $conn = koneksi();

  // variabel data
  $username = htmlspecialchars(strtolower($data["username"]));
  $password = htmlspecialchars(mysqli_real_escape_string($conn, $data["password"]));
  $email = htmlspecialchars(strtolower($data["email"]));

  // cek username udah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('username telah terdaftar!')
          </script>";
    return false;
  }

  // jika username diatas 10 huruf
  if (strlen($username) > 10) {
    echo "<script>
          alert('username terlalu panjang!');
          </script>";
    return false;
  }

  // jika password dibawah 5 digit
  if (strlen($password) < 5) {
    echo "<script>
          alert('Password terlalu pendek!');
          </script>";
    return false;
  }

  //enkrpsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah user baru ke DB
  $query = "INSERT INTO
              user (id_user, username, password, email)
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

      // Set session
      $_SESSION["login"] = true;
      $_SESSION["username"] = $username;

      // Remember me

      $role = query("SELECT * FROM user WHERE username = '$username'")[0]["role"];
      $_SESSION["role"] = $role;

      if ($role === "admin") {
        header("location: ../halaman/admin/admin.php");
      } else {
        header("location: ../halaman/dasboard.php");
      }
    }
  }
}
