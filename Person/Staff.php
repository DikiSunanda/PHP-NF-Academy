<?php

//Sertakan file induk class
require_once 'Person.php';
class Staff extends Person{
    //Member 1 Variable
    public $nip;
    public $genre;

    //Member 2 Constructor
    public function __construct($nama, $gender, $nip, $genre)
    {
        parent::__contruct($nama, $gender);
        $this -> nip = $nip;
        $this -> genre = $genre;
    }

    //Member 3 Method/fungsi 
    public function cetak(){
        parent::cetak();
        echo '<br>nip : ' .$this->nip;
        echo '<br>genre : ' .$this->genre;
        echo '<hr>';
    }
}


?>