<?php
require '../../functions/functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus!');
          document.location.href = 'pd_admin.php';
  </script>";
} else {
  echo "<script>
          alert('data gagal dihapus!');
          document.location.href = 'pd_admin.php';
        </script>";
}

session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

if ($_SESSION["role"] !== "admin") {
  header("location: ../dasboard.php");
  exit;
}
?>