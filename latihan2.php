<?php
class Bangundatar
{
    public $a, $t;

    public function __construct($alas, $tinggi)
    {
        $this->a = $alas;
        $this->t = $tinggi;
    }
    public function segitiga()
    {
        $luas = ($this->a * $this->t) / 2;
        return $luas;
    }
}

$segitiga1 = new Bangundatar(10, 2);
echo "<h2>Segitiga</h2>";
echo "Alas Segitiga : $segitiga1->a <br>";
echo "Tinggi Segitiga : $segitiga1->t <br>";
echo "Luas Segitiga : " . $segitiga1->segitiga() . "<hr>";

class Bangunruang
{
    public $a, $b;

    public function __construct($phi, $r)
    {
        $this->a = $phi;
        $this->b = $r;
    }
    public function luaslingkaran()
    {
        $luas = $this->a * $this->b * $this->b;
        return $luas;
    }

}

$lingkaran1 = new Bangunruang(3.14, 10);
echo "<h2>Lingkaran</h2>";
echo "Jari - jari Lingkaran : $lingkaran1->b <br>";
echo "Luas Lingkaran : " . $lingkaran1->luaslingkaran() . "<br>";
echo "Keliling Lingkaran : " . 2 * ($lingkaran1->a * $lingkaran1->b);
?>