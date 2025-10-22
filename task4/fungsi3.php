<!DOCTYPE html>
<html>

<head>
    <title>Mendeklarasikan dan Memanggil Fungsi</title>
</head>

<body>
    <?php
    function bilanganPrima($mulai, $selesai)
    {
        for ($p = $mulai; $p <= $selesai; $p++) {
            $prima = true;
            if ($p < 2) {
                $prima = false;
            } else {
                for ($i = 2; $i <= sqrt($p); $i++) {
                    if ($p % $i == 0) {
                        $prima = false;
                        break;
                    }
                }
            }
            if ($prima) {
                echo "$p<br>";
            }
        }
    }



    // pemanggilan fungsi
    $x = 10;
    $y = 30;

    echo "<b>Bilangan Prima dari $x hingga $y adalah:</b><br><br>";
    bilanganPrima($x, $y);
    ?>

</body>

</html>