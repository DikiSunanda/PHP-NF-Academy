<?php
//array : sekumpulan data
//array : numerik dan array asosiatif 

//1. ARRAY NUMERIK

$ar_buah = ['pepaya', 'mangga', 'pisang', 'anggur', 'Jeruk'];

//Cetak index ke ?
echo $ar_buah[4];
echo '<hr>';

//Tampilkan Jumlah total pada buah 
$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

//Lihat hasil data buah dengan foreach
foreach($ar_buah as $value){
    echo "$value <br>";
}

echo "<hr>";

//2. ARRAY ASOSIATIF
$ar_hewan = [10=>'Babi Ngepet', 20=> 'Bebek', 'Kucing', 30 => 'Putri Dugong', 'Gogog'];
echo $ar_hewan[10];
echo "<hr>";

foreach($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}
echo "<hr>";

//3. ARRAY MULTIDIMENSI (Array dalam array)
$daftar_staff = [
 ["Nama" => "Diki", "Alamat" => "Kuningan", "Whatsapp" => 912345, "Status" => "Mahasiswa"],
 ["Nama" => "Budi", "Alamat" => "Depok", "Whatsapp" => 589812, "Status" => "Mahasiswa"],
 ["Nama" => "Dono", "Alamat" => "Bogor", "Whatsapp" => 897557, "Status" => "Mahasiswa"],
 ["Nama" => "Kasino", "Alamat" => "Jakarta", "Whatsapp" => 689879, "Status" => "Mahasiswa"],
 ["Nama" => "Indro", "Alamat" => "Bekasi", "Whatsapp" => 456789, "Status" => "Mahasiswa"]
];

foreach ($daftar_staff as $namax){
    echo "$namax[Nama] <br>";
    echo "$namax[Alamat] <br>";
    echo "$namax[Whatsapp] <br>";
    echo "$namax[Status] <br>";
    echo "<hr>";
}


//Cara 2
$a1=["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"];
$a2=["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"];
$a3=["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"];
$daftar_siswa = [$a1,$a2,$a3];
foreach ($daftar_siswa as $namaxx) {
    echo "$namaxx[nama] <br>";
}


?>