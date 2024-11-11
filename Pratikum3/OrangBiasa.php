<?php

require_once "orang.php";

class OrangBiasa extends orang{

    public function ucapSalam(){
          echo "Helo perkenalkan nama saya" . $this->nama . "<br>";
    }

}