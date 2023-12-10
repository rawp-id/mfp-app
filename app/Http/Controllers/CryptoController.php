<?php

namespace App\Http\Controllers;

use App\Services\CryptoService;
use Illuminate\Http\Request;

class CryptoController extends Controller
{
    protected $CryptoService;

    public function __construct(CryptoService $tickerService)
    {
        $this->CryptoService = $tickerService;
    }
    public function index()
    {
        $Data = $this->CryptoService->getCrypto();
        return response()->json(['success' => true, 'data' => $Data]);
    }
    public function indexView()
    {
        $Data = $this->CryptoService->getCrypto();
        return view('content.crypto', ['data' => $Data, 'title' => 'Crypto']);
    }
}
