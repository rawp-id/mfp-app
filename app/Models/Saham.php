<?php

namespace App\Models;

class Saham
{
    private $kode;
    private $nama;
    private $harga;
    private $logo;
    private $bukaHarga;
    private $tertinggi;
    private $terendah;
    private $volume;
    private $marketcap;
    private $tradetime;
    private $hargaTutup;
    private $currency;

    public function __construct($kode, $nama, $logo, $harga, $bukaHarga, $tertinggi, $terendah, $volume, $marketcap, $tradetime, $hargaTutup, $currency)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->logo = $logo;
        $this->bukaHarga = $bukaHarga;
        $this->tertinggi = $tertinggi;
        $this->terendah = $terendah;
        $this->volume = $volume;
        $this->marketcap = $marketcap;
        $this->tradetime = $tradetime;
        $this->hargaTutup = $hargaTutup;
        $this->currency = $currency;
    }

    public function toArray()
    {
        return [
            'kode' => $this->kode,
            'nama' => $this->nama,
            'logo' => $this->logo,
            'harga' => $this->harga,
            'bukaHarga' => $this->bukaHarga,
            'tertinggi' => $this->tertinggi,
            'terendah' => $this->terendah,
            'volume' => $this->volume,
            'marketcap' => $this->marketcap,
            'hargaTutup' => $this->hargaTutup,
            'currency' => $this->currency,
            'tradetime' => $this->tradetime,
        ];
    }

    public function getKode()
    {
        return $this->kode;
    }
    public function setKode($kode): self
    {
        $this->kode = $kode;
        return $this;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function setNama($nama): self
    {
        $this->nama = $nama;
        return $this;
    }

    public function getHarga()
    {
        return $this->harga;
    }
    public function setHarga($harga): self
    {
        $this->harga = $harga;
        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }
    public function setLogo($logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    public function getBukaHarga()
    {
        return $this->bukaHarga;
    }
    public function setBukaHarga($bukaHarga): self
    {
        $this->bukaHarga = $bukaHarga;
        return $this;
    }

    public function getTertinggi()
    {
        return $this->tertinggi;
    }
    public function setTertinggi($tertinggi): self
    {
        $this->tertinggi = $tertinggi;
        return $this;
    }

    public function getTerendah()
    {
        return $this->terendah;
    }
    public function setTerendah($terendah): self
    {
        $this->terendah = $terendah;
        return $this;
    }

    public function getVolume()
    {
        return $this->volume;
    }
    public function setVolume($volume): self
    {
        $this->volume = $volume;
        return $this;
    }

    public function getMarketcap()
    {
        return $this->marketcap;
    }
    public function setMarketcap($marketcap): self
    {
        $this->marketcap = $marketcap;
        return $this;
    }

    public function getTradetime()
    {
        return $this->tradetime;
    }
    public function setTradetime($tradetime): self
    {
        $this->tradetime = $tradetime;
        return $this;
    }

    public function getHargaTutup()
    {
        return $this->hargaTutup;
    }
    public function setHargaTutup($hargaTutup): self
    {
        $this->hargaTutup = $hargaTutup;
        return $this;
    }

    public function getCurrency()
    {
        return $this->currency;
    }
    public function setCurrency($currency): self
    {
        $this->currency = $currency;
        return $this;
    }
}
