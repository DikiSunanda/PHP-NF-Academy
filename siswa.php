<?php

class Siswa {
//Member1 - Variabel
    public $nama;
    public $nilai;
    public $pelajaran;


//Member 2 (Method) - constructor
public function __construct($nama, $nilai, $pelajaran){
    $this -> nama= $nama;
    $this -> nilai= $nilai;
    $this -> pelajaran= $pelajaran;
}



//Member3 (Method) _ Function return
public function getHasil(){
    if ($this -> nilai > 55) return "lulus";
    else return "Tidak Lulus";
}
}

?>