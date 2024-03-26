<?php
//ini adalah penulisan komentar dalam php

/* komentar 1
komentar 2
komentar 3 */

//cetak didalam php
echo '<h1><center>Belajar PHP</center></h1>';
echo "<h3><center>Saya senang belajar PHP</center></h3>";
print "<h1><center>Belajar MySQL</center></h1>";
print '<h3><center>Saya senang belajar "MySQL"</center></h3>';


echo "<hr>";
//Variabel User
$nama = "Dono Warkop"; //Data String
$almt = " Jl. Cagak"; //Data String
$umur = 30;//Data Integer
$berat = 70.5; //Data Desimal
$_pekerjaan = "Dosen";
echo $nama;
print $almt;
print '<br>';
echo "Dia adalah seorang pria berumur $umur Dengan berat badan $berat dia beranama $nama dia tinggal di $almt dan bekerja sebagai $_pekerjaan <br>";
print 'Nama saya adalah '.$nama.' dan saya tinggal di '.$almt. ' Umur saya sekarang ' .$umur. ' Berat badan saya adalah ' .$berat. 'saya adalah seorang ' .$_pekerjaan;
echo '<hr>'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <!-- Cetak didalam HTML -->
    <h2>Nama : <?php echo $nama ?></h2>  <!-- Cara 1 -->
    <h2>Umur : <?= $umur ?>tahun</h2> <!-- Cara 2 -->
    <hr>
</body>
</html>

<?php
//Variabel sistem (Variabel bawaan yang sudah ada)
echo $_SERVER['SERVER_ADMIN'];
echo '<br>';
echo $_SERVER['SERVER_PORT'];
echo '<hr>';

//Variabel Konstanta (Nilainya Tetap)
//define : untuk memanggil variabel konstanta
define('PELAJARAN','PHP Dasar');
echo PELAJARAN;
echo '<br>';
echo 'Ini mata kuliah : ' .PELAJARAN;

echo '<hr>';

//Aritmatika
$a = 100;
$b = 50;
echo 'Nilai 1 adalah '.$a. 'dan Nilai 2 adalah' .$b;
echo '<br>';
echo 'Penjumlahan ';
echo $a + $b;
echo '<br>';
echo 'Perkalian ';
echo $a * $b;
echo '<br>';
echo 'Pengurangan ';
echo $a - $b;
echo '<br>';
echo 'Pembagian ';
echo $a / $b;
echo '<br>';
echo 'Pangkat';
echo pow($a,$b);
echo pow(2,3);
echo $a**$b;
echo '<br>';
echo 'Modulus';
echo $a%$b;


//Menghitung jari - jari
//SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2

define('PHI', 3.14);
$jari2 = 15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- Cetak didalam HTML -->
    <b>Jari - jari dari sebuah lingkaran adalah <?= $jari2 ?></b>
    <b>Dengan PHI <?= PHI ?></n>
    <p>Luasnya <?= $luas ?></p>
    <p>Kelilingnya <?= $keliling ?></p>
</body>
</html>

<hr>

<?php

//Tipe data String
$hitungString = 'Belajar PHP di Kampus Merdeka';
var_dump($hitungString);
echo'<br>';

//Tipe variable
$namaSaya = 'kiwwRogerr';
$hasil = gettype($namaSaya);
echo  $hasil;
echo '<br>';

$bil1 = 30000;
$hasil = gettype($bil1);
echo $hasil;
echo '<br>';

$bil2 = 30.77;
$hasil = gettype($bil2);
echo $hasil;
echo '<br>';

//Buat nama lengkap dan alamat, cetak menggunakan style css (style warna) menggunakan echo
echo '<br>';
echo $namaLengkap = '<b style= "color: blue; font-family: arial; font-weight: bold; font-size: 20px;">
                        Diki Sunanda
                     </b>';
echo $alamat = '<b style= "color: blue; font-family: arial; font-weight: bold; font-size: 20px;">
                   Kota Kuningan
                </b>';
echo '<br>';
echo  '<b style= "color: green; font-family: arial; font-weight: bold; font-size: 20px;">
Nama Saya
</b>' . $namaLengkap.  '<b style= "color: green; font-family: arial; font-weight: bold; font-size: 20px;">
Saya tinggal di
</b>'. $alamat;

echo '<hr>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<p style= "color: red; font-family: arial; font-weight: bold; font-size: 20px;"> Nama : <?= $namaLengkap ?></p>
<p style= "color: red; font-family: arial; font-weight: bold; font-size: 20px;"> Alamat : <?= $alamat?></p>
</body>
</html>


