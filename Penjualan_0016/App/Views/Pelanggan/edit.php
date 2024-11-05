<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
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
}

/* Container form */
form {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Gaya Label */
label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
    color: #555;
}

/* Input */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1em;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Tombol Update */
button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin-top: 20px;
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
<form action="index.php?controller=pelanggan&action=update" method="POST">
    <h1>Edit Pelanggan</h1>
    <br>
    <label for="id_pelanggan">ID Pelanggan:</label>
    <input type="text" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" required><br>

    <label for="nama_pelanggan">Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>" required><br>

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" value="<?= $pelanggan['alamat'] ?>" required><br>
    <button type="submit">Update</button>
    <a href="index.php?controller=pelanggan&action=index">Batal</a>
</form>
</body>

</html>