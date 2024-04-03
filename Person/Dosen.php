<?php

//Sertakan file induk class
require_once 'Person.php';
class Dosen extends Person{
    //Member 1 Variable
    public $nidn;
    public $gelar;

    //Member 2 Constructor
    public function __construct($nama, $gender, $nidn, $gelar)
    {
        parent::__contruct($nama, $gender);
        $this -> nidn = $nidn;
        $this -> gelar = $gelar;
    }

    //Member 3 Method/fungsi 
    public function cetak(){
        parent::cetak();
        echo '<br>NIDN : ' .$this->nidn;
        echo '<br>Gelar : ' .$this->gelar;
        echo '<hr>';
    }
}

?>