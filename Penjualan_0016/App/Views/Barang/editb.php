<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
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
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Judul halaman */
h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2em;
    color: #333;
}

/* Formulir */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1em;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="number"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Tombol */
button[type="submit"],
a[href*="index"] {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1em;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

a[href*="index"] {
    background-color: #dc3545;
    color: #fff;
    margin-left: 10px;
}

a[href*="index"]:hover {
    background-color: #c82333;
}

/* Rata tengah form */
form, h1 {
    text-align: center;
}

    </style>
</head>

<body>
    <form action="index.php?controller=barang&action=update" method="POST">
    <h1>Edit Barang</h1>
        <input type="hidden" name="kode_barang" value="<?= $barang['kode_barang'] ?>">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= $barang['nama_barang'] ?>" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="<?= $barang['harga'] ?>" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="<?= $barang['stok'] ?>" required><br>

        <button type="submit">Update</button>
        <a href="index.php?controller=barang&action=index">Batal</a>
    </form>

</body>

</html>