<?php 
class Siswa
{
    public $nama, $alamat, $usia, $hobi;

    public function datadiri($nama = null, $alamat = null, $usia = null)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->usia = $usia;
        return "Nama : $nama, Alamat : $alamat, Usia : $usia";
    }

    public function hobi($hobi)
    {
        $this->hobi = $hobi;
        return $this->datadiri($this->nama, $this->alamat, $this->usia) . "<br>" . "Hobi : $hobi";
    }
}
$siswa1 = new Siswa();
$siswa1->datadiri('Nauly', 'Bandung', 16);
echo $siswa1->hobi(" Membaca Buku Biar Pintar ");
?>