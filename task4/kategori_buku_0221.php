<?php

$kategoribuku = array(
    "Pemrograman Web",
    "Database",
    "Desain Grafis",
    "Internet",
    "Office Application"
);

echo "<strong>Daftar Kategori Buku: </strong><br>";
for ($i = 0; $i < sizeof($kategoribuku); $i++) {
    $no = $i + 1;
    echo "Nama Buku $no : " . $kategoribuku[$i] . "<br>";
}
?>