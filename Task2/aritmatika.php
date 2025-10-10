<?php

    $namanya = $_POST['namauser'];
    $angkapertama = $_POST['angkapertama'];
    $angkakeuda = $_POST['angkakedua'];

    $tambah = $angkakeuda + $angkapertama;
    $kurang = $angkakeuda - $angkapertama;
    $kali = $angkakeuda * $angkapertama;
    $bagi = $angkakeuda / $angkapertama;
    $modulo = $angkakeuda % $angkapertama;


    echo "<h1>Perhitungan Aritmatika</h1> <br>";
    echo "Nama User adalah : $namanya <br>";
    echo "$angkapertama + $angkakeuda = $tambah <br>";
    echo "$angkapertama - $angkakeuda = $kurang <br>";
    echo "$angkapertama * $angkakeuda = $kali <br>";
    echo "$angkapertama / $angkakeuda = $bagi <br>";
    echo "$angkapertama % $angkakeuda = $modulo <br>";

    ?>