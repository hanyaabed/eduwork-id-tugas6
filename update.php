<?php

include 'db.php';
$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];

$sql = "UPDATE products SET nama_produk='$nama', harga='$harga', deskripsi='$deskripsi', stok='$stok' WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
    echo "Produk berhasil diupdate.";
    echo "<a href='read.php'><button>Kembali</button></a>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}