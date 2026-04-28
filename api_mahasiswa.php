<?php
include "koneksi.php";

$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($conn, $sql);

$data_mahasiswa = array();

while ($row = mysqli_fetch_assoc($query)) {
    $data_mahasiswa[] = $row;
}

// Mengatur header agar outputnya berupa JSON
header('Content-Type: application/json');
echo json_encode($data_mahasiswa);
?>