<?php 
// jualan produk 
// komik
// game


class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }
    
    public function sayHello() {
        return "Hello World!";
    }

     public function getLabel(){
         return "$this->penulis, $this->penerbit";
     }
           
     
}




$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
$produk2 = new Produk ("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk1->getLabel();


?>