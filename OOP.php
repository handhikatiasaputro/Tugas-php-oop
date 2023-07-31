<?php

class Kulkas{
    public $warna;
    protected $merk;
    private $tinggi;

 public function __construct( $merk, $tinggi) {
    $this->merk = $merk;
    $this->tinggi= $tinggi;
}
public function __destruct() {
    echo "Kulkas ini berwarna {$this->warna} memiliki merk {$this->merk} dan Memiliki tinggi {$this->tinggi} <br>";
}
function set_Kulkas($warna)
{
    $this->warna = $warna;
}
function get_Kulkas() 
{
    return "Suhu di kulkas ini sangat dingin";
}
public function all() {
    echo " <br>Warna: {$this->warna}<br>Merk: {$this->merk}<br>Tinggi: {$this->tinggi} <br>";
}

 }
 

 class Pendingin extends kulkas{

    private $berat;

    function __construct($merk,$tinggi) {
     parent :: __construct($merk, $tinggi);
    }

    public function __destruct() {
        echo "Pendingin ini berwarna {$this->warna} memiliki merk {$this->merk} dan Memiliki berat {$this->berat} <br>";
    }
    function set_Pendingin($warna,$berat) {
        $this->warna = $warna;
        $this->berat = $berat;
    }
    function get_Pendingin() {
        return "Suhu di kulkas ini tidak terlalu dingin";
    }
 }
 


$kulkas = new Kulkas("Sharp", "1,5 meter <br>");
$kulkas->set_Kulkas("Silver");
echo "{$kulkas->get_Kulkas()}";
$kulkas->all();

echo "<br>";

$pendingin = new Pendingin ("Polytron", "1 meter <br>");
$pendingin->set_Pendingin("Biru", "51kg");
echo "{$pendingin->get_pendingin()}";
$pendingin->all();

echo "<br>";
?>
