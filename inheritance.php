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
           $jmlJam = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlJam = 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        $this-> jmlHalaman = $jmlHalaman;
        $this-> jmlJam = $jmlJam;
       
        
    }


     public function getLabel(){
         return "$this->penulis, $this->penerbit";
     }

     public function getInfoLengkap(){
         // komik : Naruto | Mashashi Kishimoto, Shanon Jump (Rp. 3000) - 100 Halaman.
         $str = "{$this->tipe} : {$this->judul}, | {$this->getLabel()}, (Rp. {$this->harga})";
         return $str;
     }
  
}

class Komik extends Produk{
    public function getInfoLengkap()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) . Halaman";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoLengkap()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) . Jam";
        return $str;
    }
}



class CetakInfoProduk {
    public function cetak($produk){  
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp . {$produk->harga}) ";
        return $str;

    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100, 0, );
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, ); 

 
// komik : Naruto | Mashashi Kishimoto, Shanon Jump (Rp. 3000) - 100 Halaman. 
// Game  Uncharted | Neil Druckmann, Sony Computer (Rp. 25000 - 50 Jam.)

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>