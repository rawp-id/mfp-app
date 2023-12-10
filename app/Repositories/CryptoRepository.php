<?php

namespace App\Repositories;

use App\Models\Crypto;
use GuzzleHttp\Client;

class Cryptorepository
{
    public function fetchToLinkedList()
    {
        $dataTicker = json_decode(file_get_contents(public_path('data_harga_crypto.json')), true);
        $dataCrypto = json_decode(file_get_contents(public_path('data_crypto.json')), true);

        if ($dataTicker === null || $dataCrypto === null) {
            return null;
        }

        $linkedList = new DoublyLinkedList();
        foreach ($dataCrypto as $datasCrypto) {
            $tickerId = $datasCrypto['ticker_id'];

            // Check if the ticker_id exists in $dataTicker['tickers']
            if (isset($dataTicker['tickers'][$tickerId])) {
                $datasTicker = $dataTicker['tickers'][$tickerId];

                // Check if the key 'vol_idr' exists in $datasTicker
                $volIdr = isset($datasTicker['vol_idr']) ? $datasTicker['vol_idr'] : null;

                $crypto = new Crypto(
                    $datasCrypto['symbol'],
                    $datasCrypto['traded_currency_unit'],
                    $datasCrypto['ticker_id'],
                    $datasCrypto['url_logo_png'],
                    $datasCrypto['coingecko_id'],
                    $datasTicker['high'] ?? null,
                    $datasTicker['low'] ?? null,
                    $datasTicker['vol_' . $datasCrypto['traded_currency']] ?? null,
                    $volIdr,
                    $datasTicker['buy'] ?? null,
                    $datasTicker['sell'] ?? null,
                    $datasTicker['last'] ?? null
                );

                $linkedList->addNode($crypto);
            }
        }
        return $linkedList;
    }

    public function getCryptoData()
    {
        $linkedList = $this->fetchToLinkedlist();

        $DataArr = [];
        $current = $linkedList->head;

        while ($current !== null) {
            $DataArr[] = $current->data->toArray();
            $current = $current->next;
        }

        return $DataArr;
    }
}
