<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tugas Struktur Kendali Perulangan</title>
</head>

<body>
    <h2>Tugas Struktur Kendali Perulangan</h2>
    <form method="post">
        <table>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="tgl_lahir" required></td>
            </tr>
            <tr>
                <td>Bilangan :</td>
                <td><input type="number" name="bilangan" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tgl_lahir = $_POST['tgl_lahir'];
        $bilangan = $_POST['bilangan'];

        // Menghitung usia berdasarkan tanggal lahir
        $tanggal_lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $usia = $sekarang->diff($tanggal_lahir)->y;

        echo "<hr>";
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Usia saat ini adalah: <b>$usia Tahun</b><br>";
        echo "Bilangan yang diinputkan adalah <b>$bilangan</b><br><br>";

        echo "Usia saya selanjutnya adalah:<br>";

        // Perulangan sebanyak bilangan yang diinputkan
        for ($i = 1; $i <= $bilangan; $i++) {
            $usia_selanjutnya = $usia + $i;
            echo "$usia_selanjutnya Tahun<br>";
        }
    }
    ?>
</body>

</html>