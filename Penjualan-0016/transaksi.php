<?php
include 'koneksi.php';

$result = $conn->query("SELECT * FROM penjualan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penjualan</title>
    <style>
        /* General body styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    color: #333;
}

/* Navigation styling */
nav {
    background-color: #007bff;
    padding: 10px 0;
}

.nav-menu {
    display: flex;
    justify-content: center;
    list-style: none;
    gap: 20px;
    padding: 0;
    margin: 0;
}

.nav-menu a {
    color: #fff;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: bold;
}

.nav-menu a.active,
.nav-menu a:hover {
    background-color: #0056b3;
}

/* Header styling */
h1 {
    text-align: center;
    color: #0056b3;
    margin-top: 20px;
}

/* Add Button styling */
a[href="tambah_transaksi.php"] {
    display: inline-block;
    margin: 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
}

a[href="tambah_brg.transaksi"]:hover {
    background-color: #0056b3;
}

/* Table styling */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #007bff;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Action links */
table td a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

table td a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Responsive design */
@media (max-width: 768px) {
    table, th, td {
        font-size: 14px;
    }

    .nav-menu {
        flex-direction: column;
        align-items: center;
    }
    .nav-menu a {
        margin: 5px 0;
    }
}

    </style>
</head>
<body>
<h3>
<nav>
        <ul class="nav-menu">
            <a href="home.php" class="active"> Home </a>
            <a href="barang.php"> Barang </a>
            <a href="pelanggan.php"> Pelanggan </a>
            <a href="transaksi.php"> Transaksi </a>
        </ul>
    </nav>
</h3>
<hr>
    <h1>Daftar Transaksi</h1>
    <a href="tambah_transaksi.php">Tambah Data</a>
    <hr>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Kode Transaksi</th>
            <th>Kode Barang</th>
            <th>ID Pelanggan</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['id_transaksi']; ?></td>
            <td><?= $row['kd_brg']; ?></td>
            <td><?= $row['id_pelanggan']; ?></td>
            <td><?= $row['jml']; ?></td>
            <td><?= number_format($row['total_harga'], 2); ?></td>
            <td><?= $row['tgl']; ?></td>
            <td>
                <a href="detail_transaksi.php?no=<?= $row['no']; ?>">Detail Transaksi</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
