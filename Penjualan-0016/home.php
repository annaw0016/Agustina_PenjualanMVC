<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
        /* General body styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
}

/* Header styling */
h1 {
    text-align: center;
    color: #0056b3;
    margin-top: 20px;
}

/* Navigation styling */
nav {
    background-color: #007bff;
    padding: 10px 0;
}

.nav-menu {
    display: flex;
    justify-content: center;
    gap: 20px;
    list-style: none;
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
    color: #fff;
}

/* Horizontal line styling */
hr {
    border: none;
    border-top: 2px solid #ddd;
    margin: 20px 0;
}

/* Responsive styling */
@media (max-width: 768px) {
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
        <h1>Selamat Datang Di Aplikasi Penjualan</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
