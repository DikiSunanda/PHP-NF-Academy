<?php

//Sertakan File Induknya
require_once 'Person.php';
class Mahasiswa extends Person{
    //Member 1 Variable
    public $semester;
    public $jurusan;

    //Member 2 Konstruktor
    public function __construct($nama, $gender, $semester, $jurusan){
        parent::__contruct($nama, $gender);
        $this -> semester = $semester;
        $this -> jurusan = $jurusan;
    }
    //Member 3 Method
    public function cetak(){
        parent::cetak();
        echo '<br>Semester : ' .$this -> semester;
        echo '<br>Jurusan : ' .$this -> jurusan;
        echo '<hr>';
    }
}

?>