    <?php 
// jualan produk 
// komik
// game

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        
    }

     public function getLabel(){
         return "$this->penulis, $this->penerbit";
     }
    
}

class CetakInfoProduk {
    public function cetak($produk){  
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp . {$produk->harga}) ";
        return $str;

    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
$produk2 = new Produk ("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1-> cetak($produk2);

?>