<?php

class orang{
    //property
    public $nama;
    public $tglLahir;
    public $alamat;

    //constructor
    public function __construct()
    {
        $this->nama ="Anonymous";
    }

    //method
    public function ucapsalam(){
        echo "<h2>Hallo, perkenalkan nama saya" . $this->nama . "</h2>";
    }

    

    //destructor
    public function __destruct()
    {
    echo "Ini Adalah Destructor Dari " . $this->nama . "<br>";
    }
}