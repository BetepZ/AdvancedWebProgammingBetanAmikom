<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan variable dinamis dalam satu halaman</title>
</head>

<body>
    <form action="latihan2.php" method="POST">
        Nama Anda <input type="text" name="namanya"> <br>
        Alamat Anda <textarea name="alamatnya"></textarea> <br>
        <input type="submit" name="kirim" value="sent">
    </form>

<?php

if (isset($_POST['kirim'])){
echo "Nama Anda adalah: $_POST[namanya]<br>";
echo "Alamat Anda adalah $_POST[alamatnya]<br>";
}
?>
</body>

</html>