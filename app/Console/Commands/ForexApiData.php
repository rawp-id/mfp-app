<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class ForexApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:forex-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $urlCountry = public_path('data_code_forex.json');
        $dataCountry = file_get_contents($urlCountry);
        $forexCountryData = json_decode($dataCountry, true);
        $data = array();
        foreach ($forexCountryData as $forexCountry) :
            $urlForex = "https://api.rawp.site/forex/?currency=" . $forexCountry['currencyCode'];
            $dataForex = Http::get($urlForex);
            $forexData = json_decode($dataForex, true);
            $datas =
                [
                    $forexCountry['currencyCode'] => $forexData['data']
                ];
            array_push($data, $datas);
        endforeach;
        File::put(public_path('data_harga_forex.json'), json_encode($data));
        $this->info('API data fetched and stored successfully.');
    }
}
