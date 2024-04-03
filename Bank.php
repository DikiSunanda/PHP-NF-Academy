<?php

class Bank {
    //Member 1 Variable
    protected $norek;
    public $nama;
    private $saldo;

    //Variable static dan const
    public static $jml = 0;
    public const BANK = 'Bank Rakyat Indosiar';

    //Member 2 Constructor
    public function __construct($no, $nasabah, $saldo){
        $this -> norek = $no;
        $this -> nama = $nasabah;
        $this -> saldo = $saldo;
        self::$jml++;
    }



    //Member 2 Method
    public function menabung($money){
        $this -> saldo += $money;
    }
    public function menarik($money){
        $this -> saldo -= $money;
    }

    //Fungsi untuk mencetak
    public function mencetak(){
        echo '<b>'. self::BANK. '</b>';
        echo '<br>No. Rekening :'. $this->norek;
        echo '<br>Nama Nasabah :'. $this->nama;
        echo '<br>Saldo : Rp. '.number_format( $this->saldo, 0, ',', '.');
        echo '<hr>';
    }

}
