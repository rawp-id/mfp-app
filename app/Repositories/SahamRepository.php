<?php

namespace App\Repositories;

use App\Models\Saham;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SahamRepository
{
    public function fetchToLinkedlist()
    {
        $apiUrl = 'data_lengkap.json';
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);

        $apiUrl2 = 'saham_data.json';
        $response2 = file_get_contents($apiUrl2);
        $data2 = json_decode($response2, true);

        if ($data === null && $data2 === null) {
            return null;
        }

        $linkedList = new DoublyLinkedList();

        foreach ($data as $result) :
            $symbol = $result['KodeSaham'];
            $name = $result['NamaPerusahaan'];
            $logo = $result['img'];
            $harga = "";
            $high = "";
            $low = "";
            $tgl = "";
            $cur = "";
            $hargaBuka = "";
            $hargaTutup = "";
            $marketcap = "";
            $volume = "";


            foreach ($data2['data'] as $result2) {
                if ($result2['code'] == $symbol) {
                    $hargaBuka = ($result2['priceopen'] != "#N/A") ? $result2['priceopen'] : '-';
                    $hargaTutup = ($result2['closeyest'] != "#N/A") ? $result2['closeyest'] : '-';
                    $harga = ($result2['price'] != "#N/A") ? $result2['price'] : '-';
                    $volume = ($result2['volume'] != "#N/A") ? $result2['volume'] : '-';
                    $high = ($result2['high'] != "#N/A") ? $result2['high'] : '-';
                    $low = ($result2['low'] != "#N/A") ? $result2['low'] : '-';
                    $tgl = ($result2['tradetime'] != "#N/A") ? $result2['tradetime'] : "-";
                    $cur = ($result2['currency'] != "#N/A") ? $result2['currency'] : "-";
                    $marketcap = ($result2['marketcap'] != "#N/A") ? $result2['marketcap'] : "-";
                    break;
                }
            }
            $saham = new Saham(
                $symbol,
                $name,
                $logo,
                $harga,
                $hargaBuka,
                $high,
                $low,
                $volume,
                $marketcap,
                $tgl,
                $hargaTutup,
                $cur
            );
            $linkedList->addNode($saham);
        endforeach;
        return $linkedList;
    }

    public function getSahamData()
    {
        $linkedList = $this->fetchToLinkedlist();

        $sahamDataArr = [];
        $current = $linkedList->head;

        while ($current !== null) {
            $sahamDataArr[] = $current->data->toArray();
            $current = $current->next;
        }

        return $sahamDataArr;
    }

    public function getSahamDataById($id)
    {
        $linkedList = $this->fetchToLinkedlist();
    
        $current = $linkedList->head;
    
        while ($current !== null) {
            if ($current->data->getKode() == $id) {
                return $current->data->toArray();
            }
            $current = $current->next;
        }
        return null;
    }

    public function topFiveHargaIDR()
    {
        $sortedList = $this->fetchToLinkedlist();
        $sahamDataArr = [];
        $current = $sortedList->head;

        $counter = 0;
        while ($current !== null && $counter < 5) {
            if ($current->data->getCurrency() === "IDR") {
                $sahamDataArr[] = $current->data->toArray();
                $counter++;
            }
            $current = $current->next;
        }

        return $sahamDataArr;
    }

    public function topFiveHargaUSD()
    {
        $sortedList = $this->fetchToLinkedlist();
        $sahamDataArr = [];
        $current = $sortedList->head;

        $counter = 0;
        while ($current !== null && $counter < 5) {
            if ($current->data->getCurrency() === "USD") {
                $sahamDataArr[] = $current->data->toArray();
                $counter++;
            }
            $current = $current->next;
        }

        return $sahamDataArr;
    }
}
