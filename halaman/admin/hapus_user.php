<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: ../login.php");
  exit;
}

if ($_SESSION["role"] !== "admin") {
  header("location: ../dasboard.php");
  exit;
}

require '../../functions/functions.php';

$id = $_GET["id"];

if (hapus3($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus!');
          document.location.href = 'kelola_user.php';
  </script>";
} else {
  echo "<script>
          alert('data gagal dihapus!');
          document.location.href = 'kelola_user.php';
        </script>";
}
?>