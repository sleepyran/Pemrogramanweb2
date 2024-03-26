<?php
// class
class Motor{
    // properti
public $nama = "kosong";
public $warna = "kosong";
public $merk = "kosong";
    // method
private function getRumah($nama,$warna, $merk){
echo "Motor ini milik: ". $nama;
echo "</br>";
echo "Warna motor ini adalah warna ". $warna;
echo "</br>";
echo "Merk motor ini adalah " . $merk;
}

public function getDetail(){
    echo $this->getRumah("Aul","Merah","Vario");
}
}
// object 
$motor = new Motor();
$motor->getDetail();
echo "</br>";
echo "</br>";
