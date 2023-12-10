@extends('layouts.myapp')
@section('content')
    <div class="text-center navbar-mobile">
        <div class="btn-group container-fluid" role="group" aria-label="Basic radio toggle button group">
            <a href="/saham" class="btn btn-outline-secondary {{ $title === 'Saham' ? 'active' : '' }}"
                for="btnradio1">Saham</a>

            <a href="/crypto"  class="btn btn-outline-secondary {{ $title === 'Crypto' ? 'active' : '' }}" for="btnradio2">Crypto</a>

            <a href="/forex" class="btn btn-outline-secondary {{ $title === 'Forex' ? 'active' : '' }}" for="btnradio3">Forex</a>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="card card-transparant">
                                            <h1><i class="bi bi-currency-bitcoin" style="font-size: 50px;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>Crypto Price</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                tincidunt felis enim,
                                                sed commodo ante mollis ac. Quisque ornare enim nec urna bibendum
                                                varius.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom mb-3" style="border-radius: 20px; height: 500px;">
                    <div class="card-body">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-crypto-coins-heatmap.js"
                                async>
                                {
                                    "dataSource": "Crypto",
                                    "blockSize": "market_cap_calc",
                                    "blockColor": "change",
                                    "locale": "id",
                                    "symbolUrl": "",
                                    "colorTheme": "light",
                                    "hasTopBar": false,
                                    "isDataSetEnabled": false,
                                    "isZoomEnabled": true,
                                    "hasSymbolTooltip": true,
                                    "width": "100%",
                                    "height": "100%"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                        
                    </div>
                </div>

            </div>
            <!-- end col-kanan -->

            <!-- start-col-kiri -->
            <div class="col-lg-4 col-md-12">

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 340px;">
                            <div class="card-body">
                                <div class="container text-center">

                                    {{-- <form action="{{ route('exchange') }}" method="post" id="exchangeForm">
                                        @csrf

                                        <div class="input-group mt-2">
                                            <label class="input-group-text" for="inputGroupSelect01">
                                                <i class="bi bi-currency-exchange"></i>
                                            </label>
                                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                                placeholder="Cari Mata Uang" name="selectCurrency2">
                                            <datalist id="datalistOptions">
                                                @foreach ($code as $option)
                                                    <option value="{{ $option }}">
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <input type="number" class="form-control mt-3 mb-3" placeholder="Harga"
                                            name="amount" id="amount">

                                        <div>
                                            <h3><i class="bi bi-arrow-down-up"></i></h3>
                                        </div>

                                        <div class="input-group mt-3">
                                            <label class="input-group-text" for="inputGroupSelect02">
                                                <i class="bi bi-currency-exchange"></i>
                                            </label>
                                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                                placeholder="Cari Mata Uang" name="selectCurrency1">
                                            <datalist id="datalistOptions">
                                                @foreach ($code as $option)
                                                    <option value="{{ $option }}">
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <h2 class="mt-2">{{ $sum }}</h2>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-secondary" type="submit">Exchange</button>
                                        </div>
                                    </form> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 290px;">
                            <div class="card-body">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                                        {
                                            "width": "100%",
                                            "height": "100%",
                                            "colorTheme": "light",
                                            "isTransparent": true,
                                            "locale": "id",
                                            "importanceFilter": "0,1",
                                            "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="card card-custom mb-3" style="border-radius: 20px;">
            <div class="card-body">
                {{-- <h1>Data Negara</h1> --}}
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-8 mt-3 text-center">
                        {{-- <form action="{{ route('handleCurrencySelection') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">
                                    <i class="bi bi-currency-exchange"></i>
                                </label>
                                <select class="form-select" id="inputGroupSelect01" name="selectedCurrency">
                                    <option selected>Pilih Mata Uang</option>
                                    @foreach ($code as $option)
                                        <option value="{{ $option }}">
                                            {{ $option }}
                                        </option>
                                    @endforeach
                                </select>
                                <button class="btn btn-outline-secondary" type="submit"
                                    style="border-color: rgb(197, 197, 197)">Pilih</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col-sm-2">logo</th>
                                <th scope="col">Cryptocurrency</th>
                                <th scope="col">buy</th>
                                <th scope="col">sell</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <th>
                                        <a type="button" href="/detail/{{ $datas['symbol'] }}" class="none-text">
                                            {{ $datas['symbol'] }}

                                        </a>
                                    </th>
                                    <td>
                                        <a type="button" href="/detail/{{ $datas['symbol'] }}" class="none-text">
                                            <img src="{{ $datas['logo'] }}" class="img-thumbnail img-fluid"
                                                alt="{{ $datas['symbol'] }}" height="80" width="80">
                                        </a>
                                    </td>
                                    <td>
                                        <a type="button" href="/detail/{{ $datas['symbol'] }}" class="none-text">
                                            {{ $datas['coingeckoId'] }}
                                        </a>
                                    </td>
                                    <td>{{ $datas['buy'] }}</td>
                                    <td>{{ $datas['sell'] }}</td>
                                    <td>
                                        <a href="/detail/{{ $datas['symbol'] }}" class="btn btn-secondary" type="button">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 70px" class="mobile"></div>
    <script>
        $(document).ready(function() {
            $('#exchangeBtn').click(function() {
                const formData = $('#exchangeForm').serialize();

                $.ajax({
                    url: '/exchange',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#amountTo').val(response.amountTo);
                    }
                });
            });
        });
    </script>
@endsection
