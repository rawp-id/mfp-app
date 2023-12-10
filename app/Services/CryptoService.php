<?php

namespace App\Services;

use App\Repositories\Cryptorepository;

class CryptoService
{
    protected $CryptoRepository;

    public function __construct(Cryptorepository $cryptoRepository)
    {
        $this->CryptoRepository = $cryptoRepository;
    }

    public function getCrypto()
    {
        return $this->CryptoRepository->getCryptoData();
    }

}