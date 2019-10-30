<?php
class Siswa
{
    public $nama, $alamat, $umur;

    public function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->alamat = $b;
        $this->umur = $c;
    }

    public function datasiswa()
    {
        return "Hallo ";
    }
}
$aceng = new Siswa('Aceng Pilek', 'Bojong', 17);
echo $aceng->datasiswa .
    "Nama Saya $aceng->nama,
    Alamat di $aceng->alamat,
    Umur Saya $aceng->umur Tahun";
?>