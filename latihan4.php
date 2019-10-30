<!DOCTYPE html>
<html>
<head>
    <title>XI RPL 2</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h3>Data Kelas XI RPL 2</h3></legend>
            Masukkan Nama Wali Kelas <input type="text" name="walikelas"><br>
            Masukkan Nama Ketua Murid <input type="text" name="km"><br>
            Masukkan Nama Sekretaris <input type="text" name="sekretaris"><br>
            Masukkan Nama Bendahara <input type="text" name="bendahara"><br>
            Masukkan Jumlah Murid <input type="number" name="jml_siswa"><br>
            <input type="submit" name="simpan" value="Simpan">

            <?php
            if (isset($_POST['simpan'])) {
                $nama_wk = $_POST['walikelas'];
                $nama_km = $_POST['km'];
                $sekretaris = $_POST['sekretaris'];
                $bendahara = $_POST['bendahara'];
                $jml_siswa = $_POST['jml_siswa'];

                class Rpl
                {
                    public $nama_wk, $nama_km, $sekretaris, $bendahara, $jml_siswa;

                    public function __construct($wk, $km, $sekretaris, $bendahara, $jml)
                    {
                        $this->nama_wk = $wk;
                        $this->nama_km = $km;
                        $this->sekretaris = $sekretaris;
                        $this->bendahara = $bendahara;
                        $this->jml_siswa = $jml;
                    }
                    public function organigram()
                    {
                        return "<br> Struktur Organigram di Kelas XI RPL 2 : <br>
                        <br> Nama Wali Kelas : Bapak $this->nama_wk <br>
                        Nama Ketua Murid : $this->nama_km <br>
                        Nama Sekretaris : $this->sekretaris <br>
                        Nama Bendahara : $this->bendahara <br>";
                    }
                    public function kehadiran()
                    {
                        return "Jumlah Siswa yang Hadir hari ini : ";
                    }
                }

                $rpl = new Rpl($nama_wk, $nama_km, $sekretaris, $bendahara, $jml_siswa);
                echo $rpl->organigram();
                echo $rpl->kehadiran() . $jml_siswa . " Siswa";
            }
            ?>
        </fieldset>
    </form>
</body>
</html>