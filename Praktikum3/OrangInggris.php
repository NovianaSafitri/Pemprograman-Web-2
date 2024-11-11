<?php

require_once "orang.php";

class OrangInggris extends orang{

    public function ucapSalam(){
          echo "Hello My Name is" . $this->nama . "<br>";
    }
    
}