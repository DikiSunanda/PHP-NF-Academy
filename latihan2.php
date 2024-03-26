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
