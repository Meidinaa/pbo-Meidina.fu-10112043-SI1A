<?php
Class Belanja { // ini adalah kelas belanja bangtan

    //ini adalah variable instance
    public string $namaPembeli = "Meya";
    public string $namaBarang = "air";   
    public int $hargaBarang = 5000;
    public int $jumlahBarang =2;
    public float $totalBayar = 15000;
    public float $diskon;

    //ini adalah variable static
    public static float $pajak = 0.02;

    //ini adalah variable local/Method
    public function __concstructor ($namaPembeli){
        $this->namaPembeli = $namaPembeli;
    }

    public function hitungTotal() : float

        $subtotal = $this->hargaBarang * $this->jumlahBarang; //operator aritmatika *

        return subtotal;
    }
    public function hitungDiskon() : float{
        $diskon = $this->totalBayar * $this->hitungDiskon
        return $diskon 
    }


    public function tampilRincian ($namaPembeli):void{
        echo "Nama Pembeli: " . $this->namaPembeli . "<br>"; 
        echo "Nama Barang : " . $this->namaBarang . "<br>";
        echo "Harga Barang : " . $this->HargaBarang . "<br>";
        echo "Jumlah Barang : " . $this->JumlahBarang . "<br>";
        echo "Total Bayar : " . $this->hitungTotal () . "<br>";

        //tambah cari diskon dan total bayar

    }


$belanja1= new Belanja(namaPembeli: "Meya");
$belanja1->tampilRincian(namaPembeli: $belanja1->namaPembeli);
$belanja= new Belanja(namaBarang: "air");
$belanja1->tampilRincian(namaBarang: $belanja1->namaBarang):
$belanja1= new Belanja(HargaBarang: 5000);
$belanja1->tampilRincian(hargaBarang: $belanja1->hargaBarang);
$belanja1= new Belanja(jumlahBarang: 2);
$belanja1->tampilRincian(jumlahBarang: $belanja1->jumlahBarang);
$belanja1= new Belanja (TotalBayar: "15000")
$belanja1->tampilRincian(TotalBayar: $belanja1->Totalayar);




?>