<?php 

include("config.php");

if (!isset($_GET['id_produk'])) {
    header('Location: data-barang.php');
}

// mengambil id dari query string
$id_produk = $_GET['id_produk'];

// mengambil data dari database
$sql = "SELECT * FROM tb_produk WHERE id_produk=$id_produk";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die ("data tidak ditemukan!");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop - Add</title>
</head>
<body>
    <header>
        <h2>Tambah Barang</h2>
    </header>

    <form action="proses-edit.php" method="POST">
    
        <fieldset>
                
			<input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>" />

            <p>
                <label for="nama_produk">Nama Produk : </label>
                <input type="text" name="nama_produk" placeholder="Nama Produk" value=" <?php echo $produk['nama_produk'] ?>"/>
            </p>
            <p>
                <label for="harga">Harga Barang : </label>
                <input type="number" name="harga"  value=" <?php echo $produk['harga'] ?>" />
            </p>
            <p>
                <label for="jumlah_produk">Jumlah Barang : </label>
                <input type="number" name="jumlah_produk"  value=" <?php echo $produk['jumlah_produk'] ?>"/>
            </p>
            <p>
                <input type="submit" value="Edit" name="edit">
            </p>
        </fieldset>

    </form>
</body>
</html>