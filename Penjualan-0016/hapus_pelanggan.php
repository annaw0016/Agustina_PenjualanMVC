<?php
include 'koneksi.php';

$no = $_GET['no'];
$conn->query("DELETE FROM pelanggan WHERE no = $no");

header("Location: pelanggan.php");
?>
