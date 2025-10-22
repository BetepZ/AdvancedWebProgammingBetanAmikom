<!DOCTYPE html>
<html>

<head>
    <title>Hitung Diskon</title>
</head>

<body>

    <h2>Hitung Diskon</h2>

    <form method="post">
        Harga Satuan : <input type="text" name="harga" required><br><br>
        Jumlah Barang : <input type="text" name="jumlah" required><br><br>
        Member : <input type="checkbox" name="member" value="yes"> Yes<br><br>
        <input type="submit" name="submit" value="submit">
        <input type="reset" value="batal">
    </form>



    <?php

    function hitungTotalBayar($harga, $jumlah, $member)
    {
        $total = $harga * $jumlah;

        if ($member && $total > 100000) {
            $diskon = 0.20 * $total;
        } elseif ($member || $total > 100000) {
            $diskon = 0.10 * $total;
        } else {
            $diskon = 0;
        }

        $total_bayar = $total - $diskon;

        return [
            'total' => $total,
            'diskon' => $diskon,
            'total_bayar' => $total_bayar
        ];
    }

    if (isset($_POST['submit'])) {
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $member = isset($_POST['member']);


        // 🔹 Panggil function hitungTotalBayar
        $hasil = hitungTotalBayar($harga, $jumlah, $member);

        echo "<h3>Total Pembayaran adalah</h3>";
        echo "Harga Satuan : $harga <br>";
        echo "Jumlah Barang : $jumlah <br>";
        echo "Member : " . ($member ? "Ya" : "Tidak") . "<br>";
        echo "Total Pembelian : {$hasil['total']} <br>";
        echo "Diskon : {$hasil['diskon']} <br>";
        echo "<strong>Total Bayar : {$hasil['total_bayar']}</strong><br>";
    }
    ?>

</body>

</html>