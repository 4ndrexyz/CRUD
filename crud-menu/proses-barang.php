<?php 

include("config.php");

// apakah tombol sudah di klik ?
if (isset($_POST['tambah'])) {

    // ambil data di form
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah_produk = $_POST['jumlah_produk'];

    // membuat query
    $sql = "INSERT INTO tb_produk (nama_produk, harga, jumlah_produk) VALUE ('$nama_produk', '$harga', '$jumlah_produk')";
    $query = mysqli_query($db, $sql);

    // bisa di simpan atau tidak 
    if ( $query ) {
        header('Location: index.php?proses=sukses');
    } else {
        header('Location: index.php?proses=gagal');
    }

} else {
    die ("akses di tolak !!");
}

?>