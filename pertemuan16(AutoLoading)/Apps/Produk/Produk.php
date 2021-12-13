<?php 

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