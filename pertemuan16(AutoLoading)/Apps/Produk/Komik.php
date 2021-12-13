<?php  
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