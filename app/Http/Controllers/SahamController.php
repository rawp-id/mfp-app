<?php

namespace App\Http\Controllers;

use App\Models\Saham;
use App\Http\Requests\StoreSahamRequest;
use App\Http\Requests\UpdateSahamRequest;
use Illuminate\Http\Request;
use App\Services\SahamService;

class SahamController extends Controller
{
    private $SahamService;

    public function __construct(SahamService $SahamService)
    {
        $this->SahamService = $SahamService;
        $this->middleware('auth');
    }

    public function index()
    {
        $sahamData = $this->SahamService->getSahamData();
        return response()->json(['success' => true, 'data' => $sahamData]);
    }

    public function indexView()
    {
        $sahamData = $this->SahamService->getSahamData();
        $top = $this->SahamService->getFiveTop();
        return view('content.saham', ['sahamData' => $sahamData, 'top' => $top, 'title' => 'Saham']);
    }

    public function showId($id)
    {
        $sahamData = $this->SahamService->getSahamDataById($id);
        return view('detail.saham', ['sahamData' => $sahamData, 'title' => 'detail']);
    }
}
