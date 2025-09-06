<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";

if(mysqli_query($koneksi, $sql))
{
    echo "Produk berhasil dihapus.";
    echo "<a href='read.php'><button>Kembali</button></a>";
}
else
{
    echo "Error: " . mysqli_error($koneksi);
}

?>