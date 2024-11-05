<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
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
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: left;
}

h2 {
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
input[type="number"],
input[type="datetime-local"] {
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
input[type="number"]:focus,
input[type="datetime-local"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Total Harga */
p {
    font-weight: bold;
    margin-top: 10px;
    color: #333;
}

#total_harga {
    color: #e60023;
    font-size: 1.1em;
}

/* Tombol Simpan */
button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
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
    <form action="index.php?controller=transaksi&action=store" method="POST">
    <h2>Tambah Transaksi</h2>
        <label for="id_transaksi">ID Transaksi:</label>
        <input type="number" name="id_transaksi" required>
        <br>

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required>
        <br>

        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" required>
        <br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required>
        <br>

        <label for="harga_barang">Harga Barang:</label>
        <input type="number" name="harga_barang" required>
        <br>

        <label for="tanggal_transaksi">Tanggal Transaksi:</label>
        <input type="datetime-local" name="tanggal_transaksi" required>
        <br>
        
        <!-- Menampilkan total harga yang dihitung secara otomatis -->
        <p>Total Harga: <span id="total_harga">0</span></p>

        <button type="submit">Simpan</button>
        <a href="index.php?controller=transaksi&action=index">Kembali</a>
    </form>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>