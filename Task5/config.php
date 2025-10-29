<?php
$config = mysqli_connect("localhost", "root", "", "dataweb0221");
if (!$config) {
    die("Gagal Terhubung ke MySQLi :" . mysqli_connect_error());
}

?>