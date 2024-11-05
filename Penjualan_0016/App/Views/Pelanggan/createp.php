<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
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
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Container form */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h1 {
    text-align: center;
    font-size: 1.8em;
    color: #333;
    margin-bottom: 20px;
}

/* Label */
label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
    color: #555;
}

/* Input */
input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
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

/* Tombol Simpan */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Link Kembali */
a {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}
    </style>
</head>

<body>
    <form action="index.php?controller=pelanggan&action=store" method="POST">
    <h1>Tambah Pelanggan</h1>
        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" required>

        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required>

        <input type="submit" value="Simpan">
        <a href="index.php?controller=pelanggan&action=index">Kembali</a>
    </form>

</body>

</html>