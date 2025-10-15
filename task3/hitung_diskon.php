<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hitung Diskon</title>
</head>

<body>
    <h2>Hitung Diskon</h2>
    <form method="post">
        <table>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td><input type="number" name="harga" required></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><input type="number" name="jumlah" required></td>
            </tr>
            <tr>
                <td>Member</td>
                <td>:</td>
                <td><input type="checkbox" name="member" value="yes"> Yes</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $total = $harga * $jumlah;
        $member = isset($_POST['member']) ? true : false;
        $diskon = 0;

        // Logika percabangan sesuai ketentuan
        if ($member && $total > 100000) {
            $diskon = 0.20; // 20%
        } elseif ($member && $total <= 100000) {
            $diskon = 0.10; // 10%
        } elseif (!$member && $total > 100000) {
            $diskon = 0.10; // 10%
        } else {
            $diskon = 0; // tidak ada diskon
        }

        $potongan = $total * $diskon;
        $bayar = $total - $potongan;

        echo "<hr>";
        echo "<b>Rincian:</b><br>";
        echo "Total Belanja : Rp " . number_format($total, 0, ',', '.') . "<br>";
        echo "Diskon : " . ($diskon * 100) . "%<br>";
        echo "Potongan Harga : Rp " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "<b>Total Bayar : Rp " . number_format($bayar, 0, ',', '.') . "</b>";
    }
    ?>
</body>

</html>