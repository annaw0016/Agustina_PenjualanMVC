<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <style>
        /* Reset dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

/* Link Navigasi */
nav a {
    display: inline-block;
    margin-bottom: 20px;
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
    font-size: 1em;
    transition: color 0.3s ease;
}

nav a:hover {
    color: #0056b3;
}

/* Card */
.card {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.card h2 {
    font-size: 1.6em;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
}

.card p {
    margin: 10px 0;
    font-size: 1em;
    line-height: 1.5;
    color: #555;
}

.card p strong {
    color: #333;
}
    </style>
</head>

<body>
    <div class="card">
        <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
        <p><strong>Nama Barang:</strong> <?= htmlspecialchars($transaksiDetail['nama_barang']) ?></p>
        <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></p>
        <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksiDetail['jumlah']) ?></p>
        <p><strong>Total Harga:</strong> <?= htmlspecialchars($transaksiDetail['total_harga']) ?></p>
        <p><strong>Tanggal Transaksi:</strong> <?= htmlspecialchars($transaksiDetail['tanggal_transaksi']) ?></p>
        <nav style="text-align: center;">
        <a href="index.php?controller=transaksi&action=index">Kembali ke Daftar Transaksi</a>
    </nav>
    </div>
</body>

</html>