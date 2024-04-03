<?php
//Sertakan File Classnya
require_once 'siswa.php';

//Ciptakan objek
// $ns1 = new Siswa();
// $ns1 -> nama = "KiwwRogerr";
// $ns1 -> nilai = 90;
// $ns1 -> pelajaran = "PHP";

// $ns2 = new Siswa();
// $ns2 -> nama = "Deki";
// $ns2 -> nilai = 95;
// $ns2 -> pelajaran = "JavaScript";

$ns1 = new Siswa ('Kiww', 90, 'PHP');
$ns2 = new Siswa ('Wikk', 90, 'Laravel');
$ns3 = new Siswa ('Ikww', 90, 'JS');

$ar_siswa = [$ns1, $ns2, $ns3];


//cetak
$no = 1;
foreach ($ar_siswa as $sis){
    echo $no++;
    echo $sis -> nama;
    echo $sis -> nilai;
    echo $sis -> pelajaran ;
    echo $sis -> getHasil() .'<br>'; 
}
echo '<hr>';

//Cetak
// echo $ns1 -> nama;
// echo $ns1 -> nilai;
// echo $ns1 -> pelajaran;
// echo $ns1 -> getHasil();

// echo $ns2 -> nama;
// echo $ns2 -> nilai;
// echo $ns2 -> pelajaran;
// echo $ns2 -> getHasil();

// echo $ns3 -> nama;
// echo $ns3 -> nilai;
// echo $ns3 -> pelajaran;
// echo $ns3 -> getHasil();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align= "center">Daftar Nilai Siswa</h2>
    <table border="1" width="50%" align="center">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Pelajaran</th>
            <th>Keterangan</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($ar_siswa as $sis){
                echo '<tr>';
                echo '<td>'.$no++ .'</td>';
                echo '<td>'.$sis -> nama .'</td>';
                echo '<td>'.$sis -> nilai .'</td>';
                echo '<td>'.$sis -> pelajaran .'</td>';
                echo '<td>'.$sis -> getHasil() .'</td>'; 
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>