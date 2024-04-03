<?php
// Sertakan File subClassnya
require_once 'Mahasiswa.php';
require_once 'Dosen.php';
require_once 'Staff.php';


// Ciptakan Objek
$d1 = new Dosen ('Diki', 'L', '0001', 'S.Kom., M.Kom');
$d2 = new Dosen ('Deki', 'L', '0002', 'S.Kom., M.Kom');
$m1 = new Mahasiswa ('kiww', 'L', '6', 'Teknik Informatika');
$s1 = new Staff ('Jonn', 'L', '090', 'Hip - Hop');
$s2 = new Staff ('Brayy', 'L', '091', 'Hip - Hop');
$s3 = new Staff ('Imin', 'L', '092', 'Hip - Hop');

// Deklarasi Objek
$data = [$d1, $d2, $m1, $s1, $s2, $s3];

// Cetak Dengan Foreach
foreach ($data as $d) {
    $d->cetak();
}
?>
