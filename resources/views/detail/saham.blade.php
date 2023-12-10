@extends('layouts.myapp')
@section('content')
    <div class="container">
        <div class="card" style="border-radius: 20px ">
            <div class="container mt-3 mb-2">
                <h2 class="navbar-desktop" style="background-color: transparent"><img src="{{ $sahamData['logo'] }}"
                        class="img-thumbnail img-fluid" alt="{{ $sahamData['kode'] }}" height="80" width="80">
                    {{ $sahamData['nama'] }}
                    ({{ $sahamData['kode'] }})</h2>
                <h5 class="mb-4 navbar-mobile" style="background-color: transparent">
                    <img src="{{ $sahamData['logo'] }}" class="img-thumbnail img-fluid" alt="{{ $sahamData['kode'] }}"
                        height="80" width="80">
                    {{ $sahamData['nama'] }}
                    ({{ $sahamData['kode'] }})
                </h5>
            </div>
            <div class="container table-responsive">
                <table class="table">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container" style="height:600px;width:100%">
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget({
                                "autosize": true,
                                "symbol": "IDX:{{ $sahamData['kode'] }}",
                                "interval": "1",
                                "timezone": "Asia/Jakarta",
                                "theme": "light",
                                "style": "1",
                                "locale": "id",
                                "enable_publishing": true,
                                "withdateranges": true,
                                "hide_side_toolbar": false,
                                "allow_symbol_change": true,
                                "details": true,
                                "hotlist": true,
                                "calendar": true,
                                "show_popup_button": true,
                                "popup_width": "1000",
                                "popup_height": "650",
                                "container_id": "tradingview_91e01"
                            });
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-8 col-md-12">

                <div class="card">
                    <div class="container mb-3">
                        <h3 class="mt-3"><img src="{{ $sahamData['logo'] }}" class="img-thumbnail img-fluid"
                                alt="{{ $sahamData['kode'] }}" height="80" width="80"> {{ $sahamData['nama'] }}
                        </h3>
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Mata Uang</th>
                                        <th scope="col">Harga Buka</th>
                                        <th scope="col">Harga Tertinggi</th>
                                        <th scope="col">Harga Terendah</th>
                                        <th scope="col">Volume</th>
                                        <th scope="col">Marketcap</th>
                                        <th scope="col">Harga Tutup</th>
                                        <th scope="col">Tradetime</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $sahamData['harga'] }}</td>
                                        <td>{{ $sahamData['currency'] }}</td>
                                        <td>{{ $sahamData['bukaHarga'] }}</td>
                                        <td>{{ $sahamData['tertinggi'] }}</td>
                                        <td>{{ $sahamData['terendah'] }}</td>
                                        <td>{{ $sahamData['volume'] }}</td>
                                        <td>{{ $sahamData['marketcap'] }}</td>
                                        <td>{{ $sahamData['hargaTutup'] }}</td>
                                        <td>{{ $sahamData['tradetime'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                                {
                                    "colorTheme": "light",
                                    "isTransparent": false,
                                    "largeChartUrl": "",
                                    "displayMode": "reguler",
                                    "width": "100%",
                                    "height": "500",
                                    "symbol": "IDX:{{ $sahamData['kode'] }}",
                                    "locale": "id"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-12">

                <div class="card">
                    <div class="container mt-3 mb-3">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                                async>
                                {
                                    "interval": "1m",
                                    "width": "100%",
                                    "isTransparent": false,
                                    "height": "790",
                                    "symbol": "IDX:{{ $sahamData['kode'] }}",
                                    "showIntervalTabs": true,
                                    "displayMode": "multiple",
                                    "locale": "id",
                                    "colorTheme": "light"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>

            </div>
        </div>
    </div>

<div style="margin-bottom: 70px" class="mobile"></div>
@endsection
