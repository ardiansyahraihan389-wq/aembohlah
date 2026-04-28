<?php
include "koneksi.php";
$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($query)) { $data[] = $row; }
header('Content-Type: application/json');
echo json_encode($data);
?>
