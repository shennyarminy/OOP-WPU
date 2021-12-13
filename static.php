<?php 
class ContohStatik {
    public static $angka = 1;

    public static function halo(){
        return "Halo " . self::$angka . " kali.";
    }
}

echo ContohStatik::$angka;
echo "<br>";


?>