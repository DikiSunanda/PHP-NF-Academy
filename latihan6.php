<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="latihan6.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Mata Kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Mata Kuliah" name="matkul" class="custom-select">
        <option value="">-----Mata Kuliah-----</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Laravel">Laravel</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="Masukan Nilai Anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


<?php

echo "<hr>";

$namaSiswa = $_POST['nama'];
$nilaiSiswa = $_POST['nilai'];
$mataKuliah = $_POST['matkul'];
$proses = $_POST['proses'];

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



// <!-- Nama Mahasiswa : Budi Santoso => Variable
// Mata Kuliah : PHP => Variable
// Nilai : 80 => If/Else
// Keterangan : Lulus/Tidak => Ternary
// Grade : 8 => If/Else
// Predikat : Bagus => Switch/Case -->

if(isset($proses)){ //Pencegah Error Handling
?>
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
<?php } ?>