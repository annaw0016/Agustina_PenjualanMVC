<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <style>
        /* Reset dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
}

nav {
    background-color: #333;
    padding: 15px 0;
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

h1 {
    text-align: center;
    margin-top: 20px;
    font-size: 2em;
    color: #333;
}

#content {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>

    <h1>Selamat datang di aplikasi penjualan</h1>

    <div id="content">
    <h3 style="text-align: center;">Agustina Wulandari_23.30.0016</h3>
        <!-- Konten halaman akan ditampilkan di sini -->
    </div>



</body>

</html>