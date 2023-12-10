<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class SahamApiData extends Command
{

    protected $signature = 'fetch:saham-api';
    protected $description = 'Fetch API data and store as JSON file';

    public function handle()
    {
        $apiData = Http::get('https://script.googleusercontent.com/macros/echo?user_content_key=YBxNlRoiMyH74EypxecH5I_Z57jbdQ7rMnHAG6WjTxsh4g_zb15aiUkzCZUA2cK_5cz_JMZf1o1y7AXx0bnrdP-MyiS0553_m5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnPqyBQyv00G0EfmNpD1u5HS49bH2Y6CgVEnm1ZlEh2eiHxxyP7sVXJGLulXFyfICXbrTgsVBD_64DBSUhOvLo6JCsIaDvV84BNz9Jw9Md8uu&lib=MK-i0YQaq0yan5qVh9aTBIGcMwhtG0Cgz')->json();

        File::put(public_path('saham_data.json'), json_encode($apiData));

        $this->info('API data fetched and stored successfully.');
    }
}
