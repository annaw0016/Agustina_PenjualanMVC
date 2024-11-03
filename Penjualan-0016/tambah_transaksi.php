<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no = $_POST['no'];
    $id_transaksi = $_POST['id_transaksi'];
    $kd_brg = $_POST['kd_brg'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $jml = $_POST['jml'];
    $total_harga = $_POST['total_harga'];
    $tgl = $_POST['tgl'];

    $conn->query("INSERT INTO penjualan (no, id_transaksi, kd_brg, id_pelanggan, jml, total_harga, tgl) VALUES ('$no', '$id_transaksi', '$kd_brg', '$id_pelanggan', '$jml', '$total_harga', '$tgl')");
    header("Location: transaksi.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Transaksi</title>
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
    <h1>Tambah Data Transaksi</h1>
    <form method="POST">
        <label>NO:</label><br>
        <input type="text" name="no"><br>

        <label>ID Transaksi:</label><br>
        <input type="text" name="id_transaksi"><br>
        
        <label>Kode Barang:</label><br>
        <input type="text" name="kd_brg"><br>
        
        <label>ID Pelanggan:</label><br>
        <input type="text" name="id_pelanggan"><br>
        
        <label>Jumlah:</label><br>
        <input type="text" name="jml"><br>

        <label>Total Harga:</label><br>
        <input type="number" name="total_harga"><br>

        <label>Tanggal:</label><br>
        <input type="datetime-local" name="tgl"><br>

        <button type="submit">Simpan</button>
        <a href="transaksi.php">Batal</a>
    </form>
</body>
</html>