<?php
//Contoh Function bawaan PHP
$str = 'Belajar PHP Di Kampus Merdeka Maha Asyikkk';
echo $str;
echo '<br>';

$str = strtoupper($str); //Huruf Kapital
echo $str;
echo '<br>';

$str = strtolower($str); //Huruf Kecil
echo $str;
echo '<br>';

$str = ucfirst($str); //Huruf Kapital Di awal kalimat
echo $str;
echo '<br>';

$str = ucwords($str); //Huruf Kapital disetiap awal kata
echo $str;
echo '<br>';


$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
sort($ar_buah); // Mengurutkan dari A - Z
foreach ($ar_buah as $buah){
    echo "$buah<br>";
}

echo '<hr>';

//Function Void
//1. Fungsi tanpa parameter / argumen (?)
function salam(){
    echo "Selamat Pagi Semuanya..";
}
salam();//Cetak Function
echo '<br>';
salam();//Cetak Function
echo '<br>';


//2. Fungsi dengan parameter / argumen (...)
function sapa($kawan){
    echo "Selamat Pagi $kawan";
}
sapa("Rozir");//cetak cara ke - 1
echo '<br>';

$nama = 'Diki';
sapa($nama); //cetak cara ke - 2
echo '<br>';

//3. Fungsi dengan parameter / argumen beserta isinya
function kabar($kawan = 'Diki', $kawan2 = 'Kimonkk'){
    echo "Hai apa kabar $kawan $kawan2";
}
kabar(); //cetak 1
echo '<br>';
kabar("KiwwRogerr"); //cetak 2
echo '<br>';
$siswa = 'DQ';
kabar($siswa); //cetak 3
echo '<br>';


function hitung($x, $y){
    $z = $x + $y;
    echo $z;
}
echo hitung(50, 70);

echo '<hr>';


//Function Return (Mengembalikan Nilai)
function tambah($a, $b){
    $c = $a + $b;
    return $c;
}
echo tambah(50, 70);
echo "<hr>";

//Membuat fungsi hitung umur
function hitungUmur($th_lahir){
    $th_sekarang = 2024;
    $umur = $th_sekarang - $th_lahir;
    return $umur;
}
echo hitungUmur(2007);
echo '<br>';

echo 'Umur Saya Adalah ' .hitungUmur(2003) .' Tahun';

?>