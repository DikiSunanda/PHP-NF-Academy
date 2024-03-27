<?php

echo "<hr>";

$namaSiswa = 'Budi Santoso';
$nilaiSiswa = 90;
$mataKuliah = 'PHP';

//Ternary
$keterangan = ($nilaiSiswa >= 60)? "Lulus" : "Gagal";


//IF
if ($nilaiSiswa >= 85 && $nilaiSiswa <= 100)
    $gradeSiswa = 'A';
else if ($nilaiSiswa >= 75 && $nilaiSiswa <= 85)
    $gradeSiswa = 'B';
else if ($nilaiSiswa >= 65 && $nilaiSiswa <= 75)
    $gradeSiswa = 'C';
else if ($nilaiSiswa >= 45 && $nilaiSiswa <= 65)
    $gradeSiswa = 'D';
else if ($nilaiSiswa >= 0 && $nilaiSiswa <= 45)
    $gradeSiswa = 'E';
else $gradeSiswa = '';


//SwitchCase
switch ($gradeSiswa) {
    case 'A':
        $predikatSiswa = 'Memuaskan';
        break;
    case 'B':
        $predikatSiswa = 'Bagus';
        break;
    case 'C':
        $predikatSiswa = 'Cukup';
        break;
    case 'D':
        $predikatSiswa = 'Kurang';
        break;
    case 'E':
        $predikatSiswa = 'Bego';
        break;
    default:
        $predikatSiswa = '';
}

// echo '<hr>';
// echo $namaSiswa;
// echo $mataKuliah;
// echo $nilaiSiswa;
// echo $keterangan;
// echo $gradeSiswa;
// echo $predikatSiswa;

?>

<!-- Nama Mahasiswa : Budi Santoso => Variable
Mata Kuliah : PHP => Variable
Nilai : 80 => If/Else
Keterangan : Lulus/Tidak => Ternary
Grade : 8 => If/Else
Predikat : Bagus => Switch/Case -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | SwitchCase</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama Siswa</td>
            <td><?php echo $namaSiswa ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td><?php echo $mataKuliah ?></td>
        </tr>
        <tr>
            <td>Nilai Siswa</td>
            <td><?php echo $nilaiSiswa ?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><?php echo $gradeSiswa ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><?php echo $keterangan ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td><?php echo $predikatSiswa ?></td>
        </tr>
    </table>
</body>
</html>