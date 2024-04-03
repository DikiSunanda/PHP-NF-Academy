<?php
//Sertakan File classnya
require_once 'Bank.php';




//Ciptakan Objek Baru 
$n1 = new Bank('001', 'Deki', 10000000000);
$n2 = new Bank('002', 'kiww', 90000000000);


//Panggil function Menabung
$n1 -> menabung(3000000000);

//Panggil function menarik
$n2 -> menarik(400000);



//Panggil Function Mencetak
echo '<h2 align="center">'. Bank::BANK. '</h2>';
$n1 -> mencetak();
$n2 -> mencetak();
echo '<h3>Jumlah Nasabah : '. Bank::$jml. '</h3>'
?>