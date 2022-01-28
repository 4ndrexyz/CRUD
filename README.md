# CRUD PHP Native
CRUD (Create, Read, Update, Delete) sistem aplikasi sederhana yang dibangun menggunakan bahasa php ini bertujuan untuk membantu anda menyelesaikan tugas Pak Rana

```php
// Nama File : config.php

<?php

$server = "localhost"; // memakai 'localhost'
$database = "db_menu"; // nama database anda
$username = "root"; // user default
$password = ""; // karena databasenya tidak memiliki Password maka kosongi saja

$connect = mysqli_connection($server, $database, $username, $password);

if (!$connect) {
  die("Server belum terhubung !"); // jika server belum terhubung maka akan menampilkan notif
}

?>
```
