<?php
namespace App\Services;

use App\Repositories\ForexRepository;

class ForexService{
    private $ForexRepository;

    public function __construct(ForexRepository $ForexRepository)
    {
        $this->ForexRepository = $ForexRepository;
    }

    public function getforexData(){
        return $this->ForexRepository->getForexData();
    }

    public function getCodeCurrency(){
        return $this->ForexRepository->getGetCurrency();
    }

    public function getforexDataByCurrencyAll($id){
        return $this->ForexRepository->getForexDataByCurrencyAll($id);
    }

    public function getforexDataByCurrency($id){
        return $this->ForexRepository->getForexDataByCurrency($id);
    }
}