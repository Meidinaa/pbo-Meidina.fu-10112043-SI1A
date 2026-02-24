<?php
Class Kendaraan
{
    public $jumlahRoda=4;
    public $warna;
    public $bahanBakar="Premium";
    public $harga=100000000;
    public $merek; 
    public $tahunPembuatan=2004;

    public function statusHarga()
    { 
        if($this->harga > 50000000)
        {
            $status = "Harga KendaraanMahal";
        }
        else
        {
            $status = "Harga KendaraanMurah";
        }
        return $status;
    }

    public function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") 
        {
            $status = "DAPAT SUBSIDI";
        }
        else 
        {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
}

// instansi kelas
echo "<h3>Objek Kendaraan</h3>";
$ObjekKendaraan = new Kendaraan();
echo "jumlahRoda : ".$ObjekKendaraan->jumlahRoda."<br/>";
echo "Status Harga : ".$ObjekKendaraan->statusHarga()."<br/>";
echo "Status Subsidi : ".$ObjekKendaraan->statusSubsidi()."<br/><br/>";


echo "<h3>Objek Kendaraan 1</h3>";
$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1->harga=100000;
$ObjekKendaraan1->tahunPembuatan=1999;
echo "Status Harga : ".$ObjekKendaraan1->statusHarga()."<br/><br/>";


echo "<h3>Objek Kendaraan 2</h3>";
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan2->bahanBakar="Pertamax";
$ObjekKendaraan2->tahunPembuatan = 1999;
echo "Status BBM : ".$ObjekKendaraan2->statusSubsidi();
?>