<!DOCTYPE html>
<html>
<head>
    <title>Form Bangundatar dan Bangunruang</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h2>Segitiga</h2></legend>
            Masukkan Alas    <input type="number" name="alas"><br> <br>
            Masukkan Tinggi  <input type="number" name="tinggi"><br>
            <input type="submit" name="simpan" value="Simpan"> <hr>

            <?php
            if (isset($_POST['simpan'])) {
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];

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

                $segitiga = new Bangundatar($alas, $tinggi);
                echo "Alas Segitiga : $segitiga->a <br>";
                echo "Tinggi Segitiga : $segitiga->t <br>";
                echo "Luas Segitiga : " . $segitiga->segitiga();
            }

            ?>
        </fieldset>
    </form> <br>

    <form action="" method="post">
        <fieldset>
            <legend><h2>Lingkaran</h2></legend>
            Masukkan Jari - jari <input type="number" name="jari" id=""><br>
            <input type="submit" name="smp" value="Simpan"> <hr>

            <?php
            if (isset($_POST['smp'])) {
                $jari = $_POST['jari'];

                class Bangunruang
                {
                    public $jari, $phi = 3.14;

                    public function __construct($jari)
                    {
                        $this->jari = $jari;
                    }
                    public function luaslingkaran()
                    {
                        $luas = $this->phi * $this->jari * $this->jari;
                        return $luas;
                    }
                    public function keliling()
                    {
                        $keliling = 2 * ($this->phi * $this->jari);
                        return $keliling;
                    }
                }

                $lingkaran = new Bangunruang($jari);
                echo "Jari - jari Lingkaran : " . $lingkaran->jari . "<br>";
                echo "Luas Lingkaran : " . $lingkaran->luaslingkaran() . "<br>";
                echo "Keliling Lingkaran : " . $lingkaran->keliling();
            }
            ?>
        </fieldset>
    </form>
</body>
</html>