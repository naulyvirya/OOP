<?php
class Aritmatika
{
    public $bil1, $bil2, $hitung = "Perhitungan";

    public function tambah($a, $b)
    {
        $this->$bil1 = $a;
        $this->$bil2 = $b;
        return "$this->hitung $a + $b = " . ($a + $b);
    }

    public function kurang($a, $b)
    {
        return "$this->hitung $a - $b = " . ($a - $b);
    }
    public function kali($a, $b)
    {
        return "$this->hitung $a * $b = " . ($a * $b);
    }
    public function bagi($a, $b)
    {
        return "$this->hitung $a / $b = " . ($a / $b);
    }
}

$hitung = new Aritmatika();
echo $hitung->tambah(50, 10);
echo "<br>" . $hitung->kurang(50, 10);
echo "<br>" . $hitung->kali(50, 10);
echo "<br>" . $hitung->bagi(50, 10);
echo "<hr>";

$hitung2 = new Aritmatika();
echo $hitung2->tambah(20, 5);
echo "<br>" . $hitung2->kurang(20, 5);
echo "<br>" . $hitung2->kali(20, 5);
echo "<br>" . $hitung2->bagi(20, 5);
?>