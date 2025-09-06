<?php

include 'db.php';

if (!isset($_GET['id'])) {
    die("ID produk tidak ditemukan");
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM products WHERE id=$id");
$produk = mysqli_fetch_assoc($result);

if (!$produk) {
    die("Produk tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>

<body>
    <h2>Edit Produk</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $produk['id']; ?>">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="<?= $produk['nama_produk']; ?>"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?= $produk['harga']; ?>"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"><?= $produk['deskripsi']; ?></textarea><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="<?= $produk['stok']; ?>"><br><br>
        <button type="submit">Update</button>
        <a href="read.php"><button type="button">Batal</button></a>
    </form>
</body>

</html>