    <?php

use CetakInfoProduk as GlobalCetakInfoProduk;
use Produk as GlobalProduk;


interface InfoProduk {
    public function getInfoLengkap();
}

abstract class Produk {
    protected $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga,
           $diskon; 

    public function __construct(
         $judul = "judul",
         $penulis = "penulis", 
         $penerbit = "penerbit",
         $harga = 0) {

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

     abstract public function InfoLengkap();

}

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman; 

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 )
    {
        parent::__construct($judul, $penulis  , $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function InfoLengkap(){
         $str = " {$this->judul}, | {$this->getLabel()}, (Rp. {$this->harga})";
         return $str;
     }

    public function getInfoLengkap()
    {
        $str = "Komik : " . $this->InfoLengkap() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk{
    public $jmlJam;

    public function __construct( $judul , $penulis , $penerbit , $harga, $jmlJam = 0 ) 
    {
        parent::__construct($judul, $penulis  , $penerbit , $harga );
        $this->jmlJam = $jmlJam;
    }
    public function InfoLengkap(){
         $str = " {$this->judul}, | {$this->getLabel()}, (Rp. {$this->harga})";
        
         return $str;
     }

    public function getInfoLengkap()
    {
        $str = "Game : ". $this->InfoLengkap() ." - {$this->jmlJam} Jam.";
        return $str;
    }  
}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk (Produk $Produk){
        $this-> daftarProduk[] = $Produk;
    }
    public function cetak( ) {  
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p) {
            $str .= "- {$p->getInfoLengkap()} <br>";

        }
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50, ); 

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();





?>