<!DOCTYPE DOCTYPE html>
<html>

<head>
    <title>Pengulangan For</title>
</head>

<body>
    <?php
    $pegawai = array('Ketua' => "Andi", 'Sekretaris' => "Bintang", 'Bendahara' => "Cinta");

    foreach ($pegawai as $jabatan => $pejabat) {
        echo "Jabatan $jabatan : $pejabat<br>";
    }
    ?>
</body>

</html>