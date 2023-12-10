<?php

namespace App\Models;

class Forex
{
    private $kode3;
    private $negara;
    private $wilayah;
    private $subWilayah;
    private $bendera;
    private $kodeMataUang;
    private $MataUang;
    private array $exchange;

    public function __construct($kode3, $negara, $wilayah, $subWilayah, $bendera, $kodeMataUang, $MataUang, array $exchange)
    {
        $this->kode3 = $kode3;
        $this->negara = $negara;
        $this->wilayah = $wilayah;
        $this->subWilayah = $subWilayah;
        $this->bendera = $bendera;
        $this->kodeMataUang = $kodeMataUang;
        $this->MataUang = $MataUang;
        $this->exchange = $exchange;
    }

    public function getKode3()
    {
        return $this->kode3;
    }
    public function setKode3($kode3): self
    {
        $this->kode3 = $kode3;
        return $this;
    }

    public function getNegara()
    {
        return $this->negara;
    }
    public function setNegara($negara): self
    {
        $this->negara = $negara;
        return $this;
    }

    public function getWilayah()
    {
        return $this->wilayah;
    }
    public function setWilayah($wilayah): self
    {
        $this->wilayah = $wilayah;
        return $this;
    }

    public function getSubWilayah()
    {
        return $this->subWilayah;
    }
    public function setSubWilayah($subWilayah): self
    {
        $this->subWilayah = $subWilayah;
        return $this;
    }

    public function getKodeMataUang()
    {
        return $this->kodeMataUang;
    }
    public function setKodeMataUang($kodeMataUang): self
    {
        $this->kodeMataUang = $kodeMataUang;
        return $this;
    }

    public function getBendera()
    {
        return $this->bendera;
    }
    public function setBendera($bendera): self
    {
        $this->bendera = $bendera;
        return $this;
    }

    public function getExchange(): array
    {
        return $this->exchange;
    }
    public function setExchange(array $exchange): self
    {
        $this->exchange = $exchange;
        return $this;
    }


    public function getMataUang()
    {
        return $this->MataUang;
    }
    public function setMataUang($MataUang): self
    {
        $this->MataUang = $MataUang;
        return $this;
    }

    public function toArray()
    {
        return [
            'kode3' => $this->kode3,
            'negara' => $this->negara,
            'wilayah' => $this->wilayah,
            'subWilayah' => $this->subWilayah,
            'bendera' => $this->bendera,
            'kodeMataUang' => $this->kodeMataUang,
            'mataUang' => $this->MataUang,
            'exchange' => $this->exchange,
        ];
    }
}
