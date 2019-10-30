<?php
class Cheetah
{
    public $suara = 'Mendengking';
    public $kecepatan = 100;
    public $berat_badan = 72.6;
    public $makan = true;

    public function memburu($var, $var2)
    {
        return "Cheetah Memburu <b>$var dan $var2</b>";
    }
    public function berlari($var, $var2)
    {
        return "Cheetah adalah salah satu hewan yang tercepat di antara hewan lainnya, 
        dengan kecepatan " . $var . '-' . $var2 . ' km/jam.';
    }
    public function berat($var)
    {
        return "Cheetah Memiliki Bobot " . $var . ' kg';
    }
    public function suara($var)
    {
        return "Walaupun Cheetah merupakan hewan tercepat didunia, tapi mereka tidak mengaung seperti singa
            ataupun harimau, mereka " . $var . " seperti suara anjing kecil.";
    }
    public function mamalia()
    {
        return "Cheetah merupakan hewan mamalia yang bisa melahirkan 9 anak sekaligus.";
    }
}

$citah = new Cheetah;
echo "Cheetah adalah hewan yang bersuara " . $citah->suara . ".<br>";
echo "Cheetah Berlari dengan Kecepatan " . $citah->kecepatan . " km/jam.<br>";
echo "Biasanya Cheetah memiliki Berat Badan " . $citah->berat_badan . " kg.<br>";
if ($citah->makan == true) {
    echo "Cheetah " . $citah->makan = "Butuh" . " Makan Untuk kelangsungan Hidupnya.<br>";
} else {
    echo "Cheetah akan lemas bahkan mati kelaparan kalau tidak berburu makanan<br>";
}

echo "<hr>";
echo $citah->memburu('Rusa', 'Springbok');
echo '<br>' . $citah->berlari(100, 120);
echo '<br>' . $citah->berat(72.6);
echo '<br>' . $citah->suara('Mendengking');
echo '<br>' . $citah->mamalia();
?>