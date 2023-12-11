<?php

namespace App\Http\Controllers;

use App\Models\Forex;
use App\Http\Requests\StoreForexRequest;
use App\Http\Requests\UpdateForexRequest;
use App\Services\ForexService;
use Illuminate\Http\Request;

class ForexController extends Controller
{
    private $ForexService;

    public function __construct(ForexService $forexService)
    {
        $this->ForexService = $forexService;
        $this->middleware('auth');
    }

    public function index()
    {
        $forexData = $this->ForexService->getforexData();
        return response()->json(['success' => true, 'data' => $forexData]);
    }

    public function indexView()
    {
        $selectedCurrency = session('selectedCurrency', 'IDR');
        $forexData = $this->ForexService->getCodeCurrency();
        $selectCurrency1 = session('selectCurrency1');
        $selectCurrency2 = session('selectCurrency2');
        $amount = session('amount');
        $forexDatabyCurr = $this->ForexService->getforexDataByCurrencyAll($selectedCurrency);
        $data = $this->ForexService->getforexDataByCurrency($selectCurrency1);
        $sum = $this->calculate($selectCurrency1, $selectCurrency2, $amount);
        return view('content.forex', ['code' => $forexData, 'data' => $forexDatabyCurr, 'title' => 'Forex', 'sum' => $sum]);
    }

    public function handleCurrencySelection(Request $request)
    {
        $selectedCurrency = $request->input('selectedCurrency');
        $request->session()->put('selectedCurrency', $selectedCurrency);
        return redirect()->back();
    }

    public function exchange(Request $request)
    {
        $selectCurrency1 = $request->input('selectCurrency1');
        $selectCurrency2 = $request->input('selectCurrency2');
        $amount = $request->input('amount');
        $request->session()->put('selectCurrency1', $selectCurrency1);
        $request->session()->put('selectCurrency2', $selectCurrency2);
        $request->session()->put('amount', $amount);
        return redirect()->back();
    }

    public function calculate($selectCurrency1, $selectCurrency2, $amount)
    {
        $data = $this->ForexService->getforexDataByCurrency($selectCurrency1);
        $sum = 0;
        if (isset($data['exchange'][0])) {
            foreach ($data['exchange'][0] as $currency => $value) {
                if ($currency == $selectCurrency2) {
                    $price = $value;
                    $sum = $amount * $price;
                    break;
                }
            }
        }
        return $sum;
    }
}
