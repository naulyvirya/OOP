<?php
class Ulangan
{
    private $jawaban = "Nomor 1 A";
    protected $no_peserta = "11-11-478";
    public $nama = "Nauly Virya Huska Putra";

    public function nama_peserta()
    {
        return $this->nama;
    }

    public function nomor_peserta()
    {
        return $this->no_peserta;
    }

    public function kepo_jawaban()
    {
        return $this->jawaban;
    }
}

class Peserta extends Ulangan
{
    public function nama()
    {
        return $this->nama;
    }

    public function nomor_peserta()
    {
        return $this->no_peserta;
    }

    public function mau_jawaban()
    {
        return $this->jawaban;
    }
}

$ulangan = new Ulangan();
$peserta = new Peserta();
echo "Nama Peserta : " . $ulangan->nama_peserta() . "<br>";
echo "Nomor Peserta : " . $peserta->nomor_peserta() . "<br>";
echo "Jawaban : " . $peserta->mau_jawaban();
