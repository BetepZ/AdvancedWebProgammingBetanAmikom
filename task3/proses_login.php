<?php
// menangkap nilai form HTML
$user = $_POST['user'];
$pass = $_POST['pass'];

// kosong
if ($user == "" or $pass == "") {
    $pesan = "User dan Password KOSONG";
}
// validasi jika user salah
elseif ($user != "betan") {
    $pesan = "User Tidak Terdaftar";
}
//valodasi jika user benar dan password salah
elseif ($user == "betan" and $pass != "1234") {
    $pesan = "Password anda SALAH!";
} else {
    $pesan = "LOGIN SUKSES! Selamat Datang $user";
}

echo "<center><b>$pesan</b></center>";
echo "<center><a href='login_0221.php'>Back</a></center>";
?>