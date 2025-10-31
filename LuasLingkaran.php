<?php

class LuasLingkaran{

    public const phi = 3.14;
    public int $jari;

    PUBLIC function __construct($isijari = 1) {
        $this->jari = $isijari;
    }

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * $this ->jari * $this->jari;
        echo "lingkaran {$nama} Hasilnya adalah: {$rumus} ";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }

    public function __destruct(){
       echo "<br/>";
       echo "udah ah cape";
    }
}
    
$lingkaran = new LuasLingkaran(7);
$lingkaran->tampil('roda'); //panggil method
LuasLingkaran::testing();