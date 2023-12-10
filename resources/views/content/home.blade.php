@extends('layouts.myapp')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <div class="card card-custom mb-3" style="border-radius: 20px;">
                    <div class="card-body">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                                {
                                    "symbols": [{
                                            "proName": "FX_IDC:EURUSD",
                                            "title": "EUR to USD"
                                        },
                                        {
                                            "proName": "BITSTAMP:BTCUSD",
                                            "title": "Bitcoin"
                                        },
                                        {
                                            "proName": "BITSTAMP:ETHUSD",
                                            "title": "Ethereum"
                                        },
                                        {
                                            "description": "Apple",
                                            "proName": "NASDAQ:AAPL"
                                        }
                                    ],
                                    "colorTheme": "light",
                                    "isTransparent": true,
                                    "showSymbolLogo": true,
                                    "locale": "id"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="card card-transparant">
                                            <h1><i class="bi bi-safe2-fill" style="font-size: 50px;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>MyFinancePrice (MFP)</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                tincidunt felis enim,
                                                sed commodo ante mollis ac. Quisque ornare enim nec urna bibendum varius.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom mb-3" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="container mt-2 mb-2">
                            <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <center>
                                        <div class="carousel-item active">
                                            <img src="https://media.istockphoto.com/id/1465618017/id/foto/investor-pengusaha-berpikir-sebelum-membeli-investasi-pasar-saham-menggunakan-smartphone-untuk.webp?b=1&s=612x612&w=0&k=20&c=l7DGEbszOKCQAE3tg3oyV_e2KmMhRXFChPNQ88e3MrU="
                                                class="d-block img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://media.istockphoto.com/id/1488294044/id/foto/pengusaha-bekerja-di-laptop-menampilkan-dasbor-analisis-bisnis-dengan-bagan-metrik-dan-kpi.webp?b=1&s=612x612&w=0&k=20&c=uy03n_2r2O1EuxT0D1QmqVpkGBIyIoZjOHqfRMjZh0w="
                                                class="d-block img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://media.istockphoto.com/id/1401461124/id/foto/tangan-pengusaha-menggunakan-ponsel-pintar-dengan-ikon-koin.webp?b=1&s=612x612&w=0&k=20&c=7mjeHRTRhxbwJY9hfxwq4nVQMCeq2uoR2NeF1L1DBIQ="
                                                class="d-block img-fluid" alt="...">
                                        </div>
                                    </center>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg col-md-12 mb-3">
                        <div class="card card-custom" style="border-radius: 17px; height: 240px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card card-transparant">
                                            <h1><i class="bi bi-wallet-fill" style="font-size: 5vw;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>Saham</h5>
                                        </div>
                                    </div>
                                </div>
                                <p>Akses informasi tentang investasi saham.</p>
                                <div class="container text-center">
                                    <a class="btn btn-outline-secondary" href=""
                                        style="border-radius: 17px; width: 200px;">Selengkapnya</a>
                                </div>
                                <!-- <h5 class="card-title"><i class="bi bi-file-earmark-text-fill"></i>Portofolio</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-12 mb-3">
                        <div class="card card-custom" style="border-radius: 17px; height: 240px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card card-transparant">
                                            <h1><i class="bi bi-currency-bitcoin" style="font-size: 5vw;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>Crypto</h5>
                                        </div>
                                    </div>
                                </div>
                                <p>Akses informasi tentang investasi crypto.</p>
                                <div class="container text-center">
                                    <a class="btn btn-outline-secondary" href=""
                                        style="border-radius: 17px; width: 200px;">Selengkapnya</a>
                                </div>
                                <!-- <h5 class="card-title"><i class="bi bi-file-earmark-text-fill"></i>Portofolio</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-12 mb-3">
                        <div class="card card-custom" style="border-radius: 17px; height: 240px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card card-transparant">
                                            <h1><i class="bi bi-currency-exchange" style="font-size: 4.4vw;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>Forex</h5>
                                        </div>
                                    </div>
                                </div>
                                <p>Akses informasi tentang investasi forex.</p>
                                <div class="container text-center">
                                    <a class="btn btn-outline-secondary" href=""
                                        style="border-radius: 17px; width: 200px;">Selengkapnya</a>
                                </div>
                                <!-- <h5 class="card-title"><i class="bi bi-file-earmark-text-fill"></i>Portofolio</h5> -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 col-md-12">
                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 250px;">
                            <div class="card-body">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                        async>
                                        {
                                            "symbol": "BINANCE:BTCBIDR",
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "id",
                                            "dateRange": "12M",
                                            "colorTheme": "light",
                                            "isTransparent": true,
                                            "autosize": true,
                                            "largeChartUrl": "",
                                            "chartOnly": false,
                                            "noTimeScale": false
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 430px;">
                            <div class="card-body">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                        {
                                            "feedMode": "all_symbols",
                                            "colorTheme": "light",
                                            "isTransparent": true,
                                            "displayMode": "regular",
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "en"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 280px;">
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

    @if (Auth::check())
        <div class="toast-container position-fixed bottom-0 end-0 me-2 mb-3 navbar-desktop">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="welcomeToast">
                <div class="toast-header">
                    <img src="safe2-fill.svg" class="rounded me-2" alt="MFP">
                    <strong class="me-auto">Welcome to MFP</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Halo, {{ Auth::user()->name }}! Selamat Datang di MFP.
                </div>
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 me-2 navbar-mobile" style="margin-bottom: 80px">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="welcomeToastMobile">
                <div class="toast-header">
                    <img src="safe2-fill.svg" class="rounded me-2" alt="MFP">
                    <strong class="me-auto">Welcome to MFP</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Halo, {{ Auth::user()->name }}! Selamat Datang di MFP.
                </div>
            </div>
        </div>
    @endif
    <div style="margin-bottom: 70px" class="mobile"></div>
@endsection
