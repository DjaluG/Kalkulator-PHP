<?php
class Kalkulator{
    private $x;
    private $y;

    // tambah
    public function setTambah($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x + $this->y;
        return $hasil;
    }

    // kali
    public function setKali($x, $y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x * $this->y;
        return $hasil;
    }

    // kurang
    public function setKurang($x, $y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x - $this->y;
        return $hasil;
    }

    //bagi 
    public function setBagi($x, $y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x / $this->y;
        return $hasil;
    }
}