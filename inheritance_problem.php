    <?php 
// jualan produk 
// komik
// game

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0,
           $jmlHalaman = 0,
           $jmlJam = 0,
           $tipe = "tipe";
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlJam = 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        $this-> jmlHalaman = $jmlHalaman;
        $this-> jmlJam = $jmlJam;
        $this-> tipe = $tipe;
        
    }


     public function getLabel(){
         return "$this->penulis, $this->penerbit";
     }

     public function getInfoLengkap(){
         // komik : Naruto | Mashashi Kishimoto, Shanon Jump (Rp. 3000) - 100 Halaman.
         $str = "{$this->tipe} : {$this->judul}, | {$this->getLabel()}, (Rp. {$this->harga})";
         if ($this->tipe == "komik") {
             $str .= "- {$this->jmlHalaman} Halaman.";

         } elseif ($this-> tipe == "game") {
             $str .= "- {$this->jmlJam} Jam.";
         }
         return $str;
     }
  
}

class CetakInfoProduk {
    public function cetak($produk){  
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp . {$produk->harga}) ";
        return $str;

    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100, 0, "komik");
$produk2 = new Produk ("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game"); 

 
// komik : Naruto | Mashashi Kishimoto, Shanon Jump (Rp. 3000) - 100 Halaman. 
// Game  Uncharted | Neil Druckmann, Sony Computer (Rp. 25000 - 50 Jam.)

echo $produk1->getInfoLengkap();

?>