<?php
class Manusia
{
    public $umur, $tgl_lahir;
    protected $jenis_kelamin;
    private $status;

    public function makan()
    {
        return "Manusia juga butuh Makan";
    }

    public function minum()
    {
        return "Manusia juga butuh Minum";
    }

    public function ambil_status($status_saat_ini)
    {
        return $this->status = $status_saat_ini;
    }

    public function status_gua()
    {
        return "Barbar namun kadang Ambyar";
    }
}

class Pria extends Manusia
{
    public function jk($jk)
    {
        return $this->jenis_kelamin = $jk;
    }

    public function datadiri()
    {
        $datadiri = "<br> Aku Seorang " . $this->jenis_kelamin;
        $datadiri .= "<br> Yang Lahir Pada " . $this->tgl_lahir;
        $datadiri .= "<br> Sampai Saat ini Masih " . $this->status_gua();
        $datadiri .= "<br> Karena Saya Masih " . $this->umur;
        $datadiri .= "<br> Belum Pantas untuk Menikah <br>";
        return $datadiri;
    }
}

$saya = new Pria();
$saya->tgl_lahir = "10 Juli 2003";
$saya->jk("Laki-laki");
$saya->ambil_status("Lajang");
$saya->umur = "160 Tahun";

echo $saya->datadiri();
echo $saya->makan() . "<br>";
echo $saya->minum();
?>