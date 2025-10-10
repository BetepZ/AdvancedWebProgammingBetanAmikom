<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Output</title>
</head>

<body>
    <h3>Hasil Output :</h3>
    <h2>Hasilnya :</h2>

    <?php

    if (isset($_POST['namauser'])) {
        $nama = $_POST['namauser'];
        $email = $_POST['emailuser'];
        $gender = $_POST['gender'];
        $nim = $_POST['NIM'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $prodi = $_POST['prodi'];


        $tanggal_lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();
        $usia = $hari_ini->diff($tanggal_lahir)->y;


        if ($prodi == "SI") {
            $nama_prodi = "Sistem Informasi";
        } elseif ($prodi == "IF") {
            $nama_prodi = "Informatika";
        } else {
            $nama_prodi = "Teknologi Informasi";
        }

        echo "Hallo, <b>$nama</b><br>";
        echo "Email anda adalah <b>$email</b><br>";
        echo "Anda <b>$gender</b><br>";
        echo "NIM anda yaitu <b>$nim</b><br>";
        echo "Tanggal Lahir anda <b>" . date("d-m-Y", strtotime($tgl_lahir)) . "</b><br>";
        echo "Prodi anda <b>$nama_prodi</b><br>";
        echo "Usia anda saat ini adalah <b>$usia tahun</b>";

    } else {
        echo "Silakan isi form terlebih dahulu!";
    }
    ?>
</body>

</html>