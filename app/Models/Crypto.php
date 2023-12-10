<?php

namespace App\Models;

class Crypto
{
    private $symbol;
    private $trade;
    private $tickerId;
    private $logo;
    private $coingeckoId;
    private $h;
    private $l;
    private $vol;
    private $volIdr;
    private $buy;
    private $sell;
    private $last;

    public function __construct($symbol, $trade, $tickerId, $logo, $coingeckoId, $h, $l, $vol, $volIdr, $buy, $sell, $last)
    {
        $this->symbol = $symbol;
        $this->trade = $trade;
        $this->tickerId = $tickerId;
        $this->logo = $logo;
        $this->coingeckoId = $coingeckoId;
        $this->h = $h;
        $this->l = $l;
        $this->vol = $vol;
        $this->volIdr = $volIdr;
        $this->buy = $buy;
        $this->sell = $sell;
        $this->last = $last;
    }

    public function toArray()
    {
        return [
            'symbol' => $this->symbol,
            'trade' => $this->trade,
            'tickerId' => $this->tickerId,
            'logo' => $this->logo,
            'coingeckoId' => $this->coingeckoId,
            'h' => $this->h,
            'l' => $this->l,
            'vol' => $this->vol,
            'volIdr' => $this->volIdr,
            'buy' => $this->buy,
            'sell' => $this->sell,
            'last' => $this->last,
        ];
    }

    public function getSymbol(){ return $this->symbol; }
    public function setSymbol($symbol): self { $this->symbol = $symbol; return $this; }

    public function getTrade(){ return $this->trade; }
    public function setTrade($trade): self { $this->trade = $trade; return $this; }

    public function getTickerId(){ return $this->tickerId; }
    public function setTickerId($tickerId): self { $this->tickerId = $tickerId; return $this; }

    public function getLogo(){ return $this->logo; }
    public function setLogo($logo): self { $this->logo = $logo; return $this; }

    public function getCoingeckoId(){ return $this->coingeckoId; }
    public function setCoingeckoId($coingeckoId): self { $this->coingeckoId = $coingeckoId; return $this; }

    public function getH(){ return $this->h; }
    public function setH($h): self { $this->h = $h; return $this; }

    public function getL(){ return $this->l; }
    public function setL($l): self { $this->l = $l; return $this; }

    public function getVol(){ return $this->vol; }
    public function setVol($vol): self { $this->vol = $vol; return $this; }

    public function getVolIdr(){ return $this->volIdr; }
    public function setVolIdr($volIdr): self { $this->volIdr = $volIdr; return $this; }

    public function getBuy(){ return $this->buy; }
    public function setBuy($buy): self { $this->buy = $buy; return $this; }

    public function getSell(){ return $this->sell; }
    public function setSell($sell): self { $this->sell = $sell; return $this; }

    public function getLast(){ return $this->last; }
    public function setLast($last): self { $this->last = $last; return $this; }
}
