<?php include("config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <nav>
        <a href="tambah-barang.php">[+] Tambah Barang</a>
    </nav>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Produk</td>
                <td>Harga Produk</td>
                <td>Jumlah Produk</td>
                <td>Tindakan</td>
            </tr>
        </thead>

        <tbody>

            <?php 
            
            $sql = "SELECT * FROM tb_produk";
            $query = mysqli_query($db, $sql);

            while($produk = mysqli_fetch_array($query)) {
                echo "<tr>";
                
                echo "<td>" . $produk['id_produk'] . "</td>";
                echo "<td>" . $produk['nama_produk'] ."</td>";
                echo "<td>" . $produk['harga'] ."</td>";
                echo "<td>" . $produk['jumlah_produk'] ."</td>";
                
                echo "<td>"; 
                echo "<a href = 'edit.php?id_produk=" . $produk['id_produk']."'>Edit | </a>";
                echo "<a href = 'hapus.php?id_produk=" . $produk['id_produk']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            
            ?>

        </tbody>
    </table>

    <p>Total Produk : <?php echo mysqli_num_rows($query) ?> item </p>

</body>
</html>