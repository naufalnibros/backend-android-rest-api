<?php
  require_once 'setting_server.php';

  if (isset($_POST['id_mhs'])) {
    $id_mhs     = $_POST['id_mhs'];

    $sql = "DELETE FROM mahasiswa WHERE id = '{$id_mhs}'";

    if (mysqli_query($conn, $sql)) {
      echo "Berhasil Menghapus Data";
    } else {
      echo "Gagal Menghapus Data";
    }

  } else {
    echo "Gagal Menghapus Data";
  }

?>
