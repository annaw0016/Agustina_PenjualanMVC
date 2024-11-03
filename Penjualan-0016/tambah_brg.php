<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no = $_POST['no'];
    $kd_brg = $_POST['kd_brg'];
    $nama_brg = $_POST['nama_brg'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $conn->query("INSERT INTO produk (no, kd_brg, nama_brg, harga, stok) VALUES ('$no','$kd_brg', '$nama_brg', '$harga', '$stok')");
    header("Location: barang.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
    <style>
        /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    padding: 0;
}

/* Page heading */
h1 {
    color: #007bff;
    margin-top: 20px;
    text-align: center;
}

/* Form container styling */
form {
    background-color: #ffffff;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Label and input styling */
label {
    font-weight: bold;
    margin-top: 10px;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Button styling */
button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    width: 100%;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

/* Back link styling */
a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
    color: #0056b3;
}

/* Responsive design */
@media (max-width: 400px) {
    form {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form method="POST">
        <label>NO:</label><br>
        <input type="text" name="no"><br>

        <label>Kode Barang:</label><br>
        <input type="text" name="kd_brg"><br>
        
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_brg"><br>

        <label>Harga:</label><br>
        <input type="number" name="harga"><br>

        <label>Stok:</label><br>
        <input type="number" name="stok"><br>

        <button type="submit">Simpan</button>
        <a href="barang.php">Batal</a>
    </form>
</body>
</html>