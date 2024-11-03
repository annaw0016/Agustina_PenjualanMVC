<?php
include 'koneksi.php';

$result = $conn->query("SELECT * FROM produk");
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
a[href="tambah_brg.php"] {
    display: inline-block;
    margin: 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
}

a[href="tambah_brg.php"]:hover {
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
    <h1>Daftar Barang</h1>
    <a href="tambah_brg.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['kd_brg']; ?></td>
            <td><?= $row['nama_brg']; ?></td>
            <td><?= number_format($row['harga'], 2); ?></td>
            <td><?= $row['stok']; ?></td>
            <td>
                <a href="edit_brg.php?no=<?= $row['no']; ?>">Edit</a> |
                <a href="hapus_brg.php?no=<?= $row['no']; ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a> |
                <a href="detail_brg.php?no=<?= $row['no']; ?>">Detail</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
