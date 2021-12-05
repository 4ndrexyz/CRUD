<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <h4>Semoga Hari mu menyenangkan !</h4>

    <nav>
        <ul>
            <li><a href="tambah-barang.php">Tambah Barang</a></li>
            <li><a href="data-barang.php">List Barang</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['proses'])): ?>
        <h6>
            <?php 
                if ($_GET['proses'] == 'sukses') {
                    echo "Sukses ditambahkan";
                } else {
                    echo "gagal ditambahkan";
                }
            ?>
        </h6>
    <?php endif; ?>
</body>
</html>