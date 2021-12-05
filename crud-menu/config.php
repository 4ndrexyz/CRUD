<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_barang";

$db = mysqli_connect($server, $user, $password, $nama_database);

if ( !$db ) {
    die ("Server gagal" . mysqli_connect_error());
} 


?>