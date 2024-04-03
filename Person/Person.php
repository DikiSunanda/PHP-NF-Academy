<?php
class Person{
    //Member 1 Variable
    public $nama;
    public $gender;

    //Member 2 Konstruktor
    public function __contruct($_nama, $_gender){
        $this -> nama = $_nama;
        $this -> gender = $_gender;
    }

    //Member 3 Method / Fungsi
    public function cetak(){
        echo '<br>Nama : '.$this->nama;
        echo '<br>Jenis Kelamin : ' .$this->gender;
    }

}


?>