<?php 

include("config.php");

// apakah tombol sudah diklik ??
if (isset($_POST['edit'])) {

    // mengambil data dari form
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah_produk = $_POST['jumlah_produk'];

    // mebuat query update 
    $sql = "UPDATE tb_produk SET nama_produk='$nama_produk', harga='$harga', jumlah_produk='$jumlah_produk' WHERE id_produk=$id_produk ";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: data-barang.php');
    } else {
        die ("Produk tidak dapat di simpan");
    }
} else {
    die ("Akses ditolak !! ");
}

?>