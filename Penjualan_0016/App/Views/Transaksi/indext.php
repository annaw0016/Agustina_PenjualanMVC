<head>
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
    <style>
        <style>
        /* Reset dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
}

/* Gaya untuk navigasi */
nav {
    background-color: #333;
    padding: 15px 0;
    margin-bottom: 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

nav ul {
    list-style-type: none;
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;
}

nav ul li {
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    transition: background 0.3s ease;
    border-radius: 5px;
}

nav ul li a:hover {
    background-color: #555;
}

/* Judul halaman */
h1 {
    text-align: center;
    font-size: 2em;
    color: #333;
    margin-bottom: 20px;
}

/* Tombol tambah data */
a[href*="create"] {
    display: inline-block;
    margin-bottom: 15px;
    padding: 10px 15px;
    color: #fff;
    background-color: #28a745;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

a[href*="create"]:hover {
    background-color: #218838;
}

/* Gaya untuk tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 12px 15px;
    text-align: left;
}

th {
    background-color: #333;
    color: #fff;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e9ecef;
}

/* Gaya untuk link aksi (Edit, Hapus) */
td a {
    color: #007bff;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

td a:hover {
    background-color: #e2e6ea;
}

td a[href*="edit"] {
    color: #ffc107;
}

td a[href*="delete"] {
    color: #dc3545;
}

    </style>
    </style>


    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>
    <title>Daftar Pelanggan</title>
</head>

<h2>Daftar Transaksi</h2>
<a href="index.php?controller=transaksi&action=create">Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Transaksi</th>
        <th>Kode Barang</th>
        <th>ID Pelanggan</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal Transaksi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($transaksiList as $key => $transaksi): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $transaksi['id_transaksi'] ?></td>
            <td><?= $transaksi['kode_barang'] ?></td>
            <td><?= $transaksi['id_pelanggan'] ?></td>
            <td><?= $transaksi['jumlah'] ?></td>
            <td><?= number_format($transaksi['total_harga'], 2); ?></td>
            <td><?= $transaksi['tanggal_transaksi'] ?></td>
            <td><a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>">Detail</a></td>

        </tr>
    <?php endforeach; ?>



</table>