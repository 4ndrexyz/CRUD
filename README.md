# CRUD PHP Native
CRUD (Create, Read, Update, Delete) sistem aplikasi sederhana yang dibangun menggunakan bahasa php ini bertujuan untuk membantu anda menyelesaikan tugas Pak Rana

```php
<?php

// File config.php
$server = "localhost"; // Karena menggunakan XAMPP jadi Local servernya 'localhost'
$database = "db_menu"; // nama dari database
$username = "root";
$password = ""; // karena databasenya tidak di Password/sandi maka kosongi saja

//membuat variabel baru dengan nama $connect
$connect = mysqli_connection($server, $database, $username, $password);

if (!$connect) {
  die("Server belum terhubung !"); // jika server belum terhubung maka akan menampilkan notif
}

?>
```
