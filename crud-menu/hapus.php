<?php 

include("config.php");

if (isset($_GET['id_produk'])) {

    $id_produk = $_GET['id_produk'];

    // membuat perintah sql hapus
    $sql = "DELETE FROM tb_produk WHERE id_produk=$id_produk";
    $qeury = mysqli_query($db, $sql);

    if ($qeury){
        header('Location: data-barang.php');
    } else {
        die("Gagal di hapus");
    }
} else {
    die ("Akses di tolak !");
}

?>