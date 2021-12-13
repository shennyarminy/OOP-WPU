    <?php 
use Produk as GlobalProduk;

class Produk {
    private $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga,
           $diskon; 
           
         

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        
    }
     public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        return $this->judul = $judul; 
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenulis($penulis){
        return $this->penulis = $penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit($penerbit){
        return $this->penerbis = $penerbit;
    }
     public function getHarga()
    {
      return $this->harga - ($this->harga * $this->diskon / 100);  
    }
    public function setDiskon ($diskon){
        $this->diskon = $diskon;
    }
    

     public function getLabel(){
         return "$this->penulis, $this->penerbit";
     }

     public function getInfoLengkap(){
         $str = " {$this->judul}, | {$this->getLabel()}, (Rp. {$this->harga})";
        
         return $str;
     }
    

   
  
}

class Komik extends Produk{
    public $jmlHalaman; 

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 )

    {
        parent::__construct($judul, $penulis  , $penerbit , $harga );

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoLengkap()
    {
        $str = "Komik : " . parent::getInfoLengkap() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $jmlJam;

    public function __construct( $judul , $penulis , $penerbit , $harga, $jmlJam = 0 ) 
    {
        parent::__construct($judul, $penulis  , $penerbit , $harga );

        $this->jmlJam = $jmlJam;
    }

    public function getInfoLengkap()
    {
        $str = "Game : ". parent::getInfoLengkap() ." - {$this->jmlJam} Jam.";
        return $str;
    }  
}

class CetakInfoProduk {
    public function cetak($produk){  
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp . {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50, ); 

 
echo $produk1-> getInfoLengkap();
echo "<br>";
echo $produk2-> getInfoLengkap();
echo "<hr>"; 

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("JudulBaru");
echo $produk1->getJudul();
echo "<br>"; 






?>