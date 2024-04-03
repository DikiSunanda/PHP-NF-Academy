<?php
require_once 'Kucing.php';
require_once 'Kambing.php';
require_once 'Gogog.php';

//Ciptakan Objek
$shaun = new Kambing();
$tom = new Kucing();
$scooby = new Gogog();

//Cetak Objek
$suara_hewan = [$shaun, $tom, $scooby];

//Cetak dengan Foreach
foreach($suara_hewan as $hewan){
    echo $hewan->bersuara();
}

?>