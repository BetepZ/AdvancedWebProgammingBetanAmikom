<!DOCTYPE html>
<html>
<head>
    <title>Struktur pengulangan dengan do..while</title>
</head>
<body>
<?php
    //Perulangan do while terpenuih
    $i = 1;
    do
    {
        echo "Ini juga pengulangan yang ke-$i<br>";
        $i++;
    }
    while ($i <= 8);

    //Perulangan do while tdk terpenuhgi

    echo"<br>";
    echo"<hr>";

    
    $j = 5;
    do
    {
        echo "<br>Perulangan ini kondisinya tidak terpenuhi<br>";
        $j++;
    }
    while ($j <= 3);
?>
</body>
</html>