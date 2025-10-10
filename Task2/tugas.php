<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>

<body>
    <h1>INPUT HITUNG USIA WAK</h1>
    <form action="tugasHitung.php" method="POST">
        <table>
            <tr>
                <td>Nama Anda :</td>

                <td><input type="text" name="namauser"></td>
            </tr>
            <tr>
                <td>Email Anda :</td>

                <td><input type="email" name="emailuser"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                    <input type="radio" name="gender" value="Laki-laki"> Laki-Laki
                </td>
            </tr>

            <tr>
                <td>NIM</td>

                <td><input type="text" name="NIM"></td>
            </tr>

            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>

            <tr>
                <td>Prodi :</td>
                <td>
                    <select name="prodi">
                        <option value="SI">Sistem Informasi</option>
                        <option value="IF">Informatika</option>
                        <option value="TI">Teknologi Informasi</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Hitung Usia">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>