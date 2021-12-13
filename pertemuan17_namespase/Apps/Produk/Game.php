<?php   
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