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

    <form action="proses-barang.php" method="POST">
    
        <fieldset>
            <p>
                <label for="nama_produk">Nama Produk : </label>
                <input type="text" name="nama_produk" placeholder="Nama Produk" />
            </p>
            <p>
                <label for="harga">Harga Barang : </label>
                <input type="number" name="harga" />
            </p>
            <p>
                <label for="jumlah_produk">Jumlah Barang : </label>
                <input type="number" name="jumlah_produk" />
            </p>
            <p>
                <input type="submit" value="tambah" name="tambah">
            </p>
        </fieldset>

    </form>
</body>
</html>