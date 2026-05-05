<?php
include 'koneksi.php';

// Mengambil data urut berdasarkan ID
$sql = "SELECT nilai FROM statistik ORDER BY id ASC";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Memasukkan angka ke dalam array
        $data[] = (int)$row['nilai'];
    }
}

// Mengubah array menjadi format JSON
echo json_encode($data);
?>