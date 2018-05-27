<?php
if ($_SERVER['REQUEST_METHODE'] == 'POST') {

  require_once 'setting_server.php';

  $id_mhs     = $_POST['id_mhs'];
  $nama_mhs   = $_POST['nama_mhs'];
  $kelas_mhs  = $_POST['kelas_mhs'];

  $sql = "UPDATE mahasiswa SET nama = '$nama_mhs', kelas = '$kelas_mhs' WHERE id = '$id_mhs'";

  if (mysqli_query($conn, $sql)) {
    echo "Berhasil diupdate";
  } else {
    echo "Gagal Update";
  }

}

 ?>
