<?php
include 'koneksi.php';

$no = $_GET['no'];
$result = $conn->query("SELECT * FROM produk WHERE no = $no");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Barang</title>
    <style>
        /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container for the detail card */
.detail-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px 30px;
    width: 300px;
    text-align: left;
}

/* Heading styling */
h1 {
    color: #007bff;
    text-align: center;
    margin-bottom: 20px;
}

/* Paragraph styling for details */
.detail-card p {
    font-size: 16px;
    line-height: 1.6;
    margin: 8px 0;
}

/* Back link styling */
.detail-card a {
    display: block;
    margin-top: 20px;
    text-align: center;
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

.detail-card a:hover {
    color: #0056b3;
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="detail-card">
        <h1>Detail Barang</h1>
        <p>No : <?= $data['no']; ?></p>
        <p>Kode Barang: <?= $data['kd_brg']; ?></p>
        <p>Nama Barang: <?= $data['nama_brg']; ?></p>
        <p>Harga : <?= number_format($data['harga'], 2); ?></p>
        <p>Stok : <?= $data['stok']; ?></p>
        <a href="barang.php">Kembali</a>
    </div>
</body>
</html>

