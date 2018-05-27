<?php

require_once 'setting_server.php';

$id_mhs = $_GET['id_mhs'];

$query = "SELECT * FROM mahasiswa WHERE id = $id_mhs";
$sql = mysqli_query($conn, $query);
$data = array();

while ($row = mysqli_fetch_array($sql)) {
  array_push($data, array(
    'id_mhs' => $row['id'],
    'nama_mhs' => $row['nama'],
    'kelas_mhs' => $row['kelas']
  ));
}

echo json_encode($data);
mysqli_close($conn);

 ?>
