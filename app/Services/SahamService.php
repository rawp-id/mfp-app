<?php
namespace App\Services;

use App\Repositories\SahamRepository;

class SahamService
{
    private $SahamRepository;

    public function __construct(SahamRepository $SahamRepository)
    {
        $this->SahamRepository = $SahamRepository;
    }

    public function getSahamData()
    {
        return $this->SahamRepository->getSahamData();
    }

    public function getFiveTop()
    {
        $idr=$this->SahamRepository->topFiveHargaIDR();
        $usd=$this->SahamRepository->topFiveHargaUSD();
        return ['idr'=>$idr,'usd'=>$usd];
    }

    public function getSahamDataById($id){
        return $this->SahamRepository->getSahamDataById($id);
    }
}

?>