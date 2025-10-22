<!DOCTYPE html>
<html>

<body>
    <h2>Latihan Membuat ARRAY</h2>

    <?php
    // Membuat Array Berindeks
    $kategoribuku[0] = "Pemrograman Web";
    $kategoribuku[1] = "Database";
    $kategoribuku[2] = "Desain Grafis";
    $kategoribuku[3] = "Internet";
    $kategoribuku[4] = "Office Application";
    $kategoribuku[5] = "Office Application";

    // Membuat Array Asosiatif
    $buku = array(
        "isbn" => "979-96446-9-2",
        "judul" => "Modul Pemrograman Web Lanjut",
        "pengarang" => "Kartika Dewi Arum",
        "penerbit" => "ANDI OFFSET"
    );

    // Mengakses Array Berindeks Menggunakan FOR
    echo "<strong>Daftar Kategori Buku:</strong><br>";
    for ($i = 0; $i < sizeof($kategoribuku); $i++) {
        echo "Nama Buku $i : " . $kategoribuku[$i] . "<br>";
    }

    // Mengakses Array Asosiatif Menggunakan FOREACH
    echo "<strong>Contoh Buku:</strong><br>";
    foreach ($buku as $kunci => $nilai) {
        echo "$kunci : $nilai<br>";
    }
    ?>
</body>

</html>