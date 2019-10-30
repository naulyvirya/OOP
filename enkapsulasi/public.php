<?php
// buat class laptop
class Laptop
{
    public $pemilik;
    //buat public method
    public function hidupkan_laptop()
    {
        return "Menghidupkan Laptop";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
// set property
$laptop_anto->pemilik = "Anto ";

// tampilkan property
echo $laptop_anto->pemilik; // Anto

// tampilkan method
echo $laptop_anto->hidupkan_laptop(); // "Hidupkan Laptop"
?>