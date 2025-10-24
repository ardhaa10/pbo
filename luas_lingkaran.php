<?php

class Luaslingkaran {

    public const phi = 3.14;

    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo"</br>";
        echo "ini testing static";
    
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 10; //input nilai jari jari
$lingkaran->tampil(); //tampilkan luas lingkaran

LuasLingkaran::testing(); //memanggil method static
//$rumus = Luaslingkaran::phi * ($lingkaran->jari * $lingkaran->jari);
//echo "hasilnya adalah :", $rumus;
