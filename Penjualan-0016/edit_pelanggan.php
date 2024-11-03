<?php
include 'koneksi.php';

$no = $_GET['no'];
$result = $conn->query("SELECT * FROM pelanggan WHERE no = $no");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];

    $conn->query("UPDATE pelanggan SET id_pelanggan = '$id_pelanggan', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat' WHERE no = $no");
    header("Location: pelanggan.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
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

/* Container for the edit form card */
.edit-card {
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

/* Label and input styling */
.edit-card label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

.edit-card input[type="text"],
.edit-card input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Button styling */
.edit-card button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    font-size: 16px;
}

.edit-card button:hover {
    background-color: #0056b3;
}

/* Back link styling */
.edit-card a {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

.edit-card a:hover {
    color: #0056b3;
    text-decoration: underline;
}

    </style>
</head>
<body>
<div class="edit-card">
    <h1>Edit Data Pelanggan</h1>
    <form method="POST">
        <label>ID Pelanggan:</label><br>
        <input type="text" name="id_pelanggan" value="<?= $data['id_pelanggan']; ?>"><br>
        
        <label>Nama Pelanggan:</label><br>
        <input type="text" name="nama_pelanggan" value="<?= $data['nama_pelanggan']; ?>"><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="<?= $data['alamat']; ?>"><br>

        <button type="submit">Simpan</button>
        <a href="pelanggan.php">Batal</a>
    </form>
</div>
</body>
</html>
