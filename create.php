<?php

include 'db.php';

$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];

$sql = "INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES ('$nama', '$harga', '$deskripsi', '$stok')";

if (mysqli_query($koneksi, $sql))
{
    echo "Produk berhasil ditambahkan.";
    echo "<a href='index.html'><button>Kembali</button></a>";
}
else 
{
    echo "Error: " . mysqli_error($koneksi);
}

?>