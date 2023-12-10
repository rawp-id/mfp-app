<?php

namespace App\Repositories;

use App\Models\Forex;
use PhpParser\Node\Stmt\Break_;

class ForexRepository
{
    public function fetchToLinkedlist()
    {
        $apiUrl = 'data_forex.json';
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);

        $apiUrl2 = 'data_harga_forex.json';
        $response2 = file_get_contents($apiUrl2);
        $data2 = json_decode($response2, true);

        if ($data === null && $data2 === null) {
            return null;
        }

        $linkedList = new DoublyLinkedList();

        foreach ($data['data'] as $country) :
            $exchange = [];
            foreach ($data2 as $price) :
                if (isset($price[$country['currencyCode']])) {
                    $exchange = $price[$country['currencyCode']];
                    break;
                }
            endforeach;
            $forex = new Forex(
                $country['code3'],
                $country['country'],
                $country['region'],
                $country['subRegion'],
                $country['img'],
                $country['currencyCode'],
                $country['currency'],
                $exchange
            );
            $linkedList->addNode($forex);
        endforeach;
        return $linkedList;
    }

    public function getForexData()
    {
        $linkedList = $this->fetchToLinkedlist();

        $forexDataArr = [];
        $current = $linkedList->head;

        while ($current !== null) {
            $forexDataArr[] = $current->data->toArray();
            $current = $current->next;
        }

        return $forexDataArr;
    }

    public function getForexDataByCurrencyAll($id)
    {
        $linkedList = $this->fetchToLinkedlist();
        $matchingData = [];
    
        $current = $linkedList->head;
    
        while ($current !== null) {
            if ($current->data->getKodeMataUang() == $id) {
                $matchingData[] = $current->data->toArray();
            }
            $current = $current->next;
        }
    
        return $matchingData;
    }
    
    public function getForexDataByCurrency($id)
    {
        $linkedList = $this->fetchToLinkedlist();
    
        $current = $linkedList->head;
    
        while ($current !== null) {
            if ($current->data->getKodeMataUang() == $id) {
                return $current->data->toArray();
            }
            $current = $current->next;
        }
        return null;
    }

    public function getGetCurrency()
    {
        $data = json_decode(file_get_contents(public_path('data_code_forex.json')),true);
        $forexDataArr = [];
        foreach($data as $code):
            array_push($forexDataArr,$code['currencyCode']);
        endforeach;
        return $forexDataArr;
    }
}
