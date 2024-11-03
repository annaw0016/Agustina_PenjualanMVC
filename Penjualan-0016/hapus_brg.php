<?php
include 'koneksi.php';

$no = $_GET['no'];
$conn->query("DELETE FROM produk WHERE no = $no");

header("Location: barang.php");
?>
