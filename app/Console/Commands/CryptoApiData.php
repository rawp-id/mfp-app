<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class CryptoApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:crypto-api';

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
        File::put(public_path('data_harga_crypto.json'), HTTP::get('https://indodax.com/api/tickers'));
        File::put(public_path('data_crypto.json'), HTTP::get('https://indodax.com/api/pairs'));

        $this->info('API data fetched and stored successfully.');
    }
}
