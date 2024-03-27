<?php

//Deklarasi dan inisialisasi
$nama = "Deki";
$totalBelanja = 120;

if ($totalBelanja > 100){
    echo"Selamat $nama anda mendapatkan Mobil";
}else{
    echo "Dasar Miskin !";
}
echo'<hr>';

$umur= 80;

if ($umur > 20){
    echo "$nama Selamat kamu legal mengendarai Mobil sekarang";
}else{
    echo "$nama Kamu dilarang mengendarai Mobil";
}
echo "<br>";

if ($umur > 20) echo "Kamu dapat mengendarai mobil";
else if ($umur > 17 ) echo "Kamu dapat mengendarai motor";
else if ($umur > 10) echo "Kamu dapat mengendarai sepeda";
else ("Kamu Tolol");
echo "<hr>";

if($umur < 40 && $umur >=17){
    $ket = 'Dewasa';
}
else if($umur < 17 && $umur >= 9){
    $ket = 'Remaja';
}
else if($umur < 9 && $umur > 5){
    $ket = 'Anak - anak';
}
else if($umur < 5 && $umur >= 0){
    $ket = 'Balita';
}
else{
    $ket = 'Tuwir';
}

echo 'Nama saya '.$nama. ' Umur saya '.$umur. ' Saya termasuk manusia '.$ket;
echo "<br>";
echo "<hr>";


//Ternary
$nilai = 8;
echo ($nilai > 8)? "Excellent": "Idiot";

echo "<hr>";


//Switch case
$baju = 'm'; //Ukuran Baju
switch($baju){
    case "L":
    case 'l':
        echo "Large";
        break;
    case 'M':
    case 'm':
        echo "Medium";
        break;
    default:
        echo "Small";
    }

echo "<br>";


//Str to lower
$baju = 'L';
$baju = strtolower($baju);

switch ($baju) {
    case "l":
        echo "Large";
        break;
    case "m":
        echo "Medium";
        break;
    default:
        echo "Small";
}

echo "<hr>";

$nilai = 87;
switch($nilai){
    case $nilai <= 10:
        echo "$nilai : Buruk";
        break;
    case $nilai <= 40:
        echo "$nilai : Kurang";
        break;
    case $nilai <= 70:
        echo "$nilai : Cukup";
        break;
    case $nilai <= 80:
        echo "$nilai : Memuaskan";
        break;
    case $nilai <= 100:
        echo "$nilai : Terpuaskan";
        break;
    default:
        echo "null";
}

echo "<hr>";

$nilai = 10;
switch($nilai){
    case $nilai >= 0 && $nilai <= 25:
        echo "$nilai : E";
        break;
    case $nilai >= 25 && $nilai <= 60:
        echo "$nilai : D";
        break;
    case $nilai >= 60 && $nilai<= 75:
        echo "$nilai : C";
        break;
    case $nilai >= 75 && $nilai <= 85:
        echo "$nilai : B";
        break;
    case $nilai >= 85 && $nilai <= 100:
        echo "$nilai : A";
        break;
    default:
        echo "null";
}

 