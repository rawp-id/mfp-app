@extends('layouts.myapp')
@section('content')
    <div class="text-center navbar-mobile">
        <div class="btn-group container-fluid" role="group" aria-label="Basic radio toggle button group">
            <a href="/saham" class="btn btn-outline-secondary {{ $title === 'Saham' ? 'active' : '' }}"
                for="btnradio1">Saham</a>

            <a class="btn btn-outline-secondary {{ $title === 'Crypto' ? 'active' : '' }}" for="btnradio2">Crypto</a>

            <a class="btn btn-outline-secondary {{ $title === 'Forex' ? 'active' : '' }}" for="btnradio3">Forex</a>
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
                                            <h1><i class="bi bi-safe2-fill" style="font-size: 50px;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>Stock Price</h5>
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
                        <div class="tradingview-widget-container navbar-desktop">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                                {
                                    "exchanges": [
                                        "IDX"
                                    ],
                                    "dataSource": "AllID",
                                    "grouping": "sector",
                                    "blockSize": "market_cap_basic",
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
                        <div class="table-responsive">
                            <table class="table">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container Widget navbar-mobile">
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                                        {
                                            "exchanges": [
                                                "IDX"
                                            ],
                                            "dataSource": "IDX30",
                                            "grouping": "no_group",
                                            "blockSize": "market_cap_basic",
                                            "blockColor": "change",
                                            "locale": "id",
                                            "symbolUrl": "",
                                            "colorTheme": "light",
                                            "hasTopBar": false,
                                            "isDataSetEnabled": true,
                                            "isZoomEnabled": true,
                                            "hasSymbolTooltip": true,
                                            "width": 500,
                                            "height": 450
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col-kanan -->

            <!-- start-col-kiri -->
            <div class="col-lg-4 col-md-12">

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 330px;">
                            {{-- <div class="card-header" style="background-color: transparent;">
                                <h4>Top Price</h4>
                            </div> --}}
                            <div class="card-body scroll">
                                @foreach ($top['usd'] as $tops)
                                    <div class="card mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="col-3">
                                                <img src="{{ $tops['logo'] }}" class="img-thumbnail img-fluid"
                                                    alt="{{ $tops['kode'] }}" height="80" width="80">
                                            </div>
                                            <div class="col">
                                                <strong class="mb-2" style="font-size: 20px">{{ $tops['kode'] }}</strong>
                                                <h6>{{ $tops['nama'] }}</h6>
                                                <strong >{{ $tops['harga'] }} USD <i style="color: green;">high price <i
                                                    class="bi bi-arrow-up-right"></i></i></strong>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach ($top['idr'] as $tops)
                                    <div class="card mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="col-3">
                                                <img src="{{ $tops['logo'] }}" class="img-thumbnail img-fluid"
                                                    alt="{{ $tops['kode'] }}" height="80" width="80">
                                            </div>
                                            <div class="col">
                                                <strong class="mb-2" style="font-size: 20px">{{ $tops['kode'] }}</strong>
                                                <h6>{{ $tops['nama'] }}</h6>
                                                <strong style="color: green;">Rp. {{ $tops['harga'] }}<i
                                                        class="bi bi-arrow-up-right"></i></strong>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="card-footer" style="background-color: transparent;">
                                <form action="" method="">
                                    <div class="row mt-2 mb-2">
                                        <div class="col-lg-9 col-md-9">
                                            <div class="card" style="border: none;">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                    <label for="floatingTextarea">Chat</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3  col-md-3">
                                            <div class="card" style="border: none ;">
                                                <button class="btn btn-secondary" style="height: 55px;"><i
                                                        class="bi bi-send-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 296px;">
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
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col-sm-2">Logo</th>
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Mata Uang</th>
                                <th scope="col">Harga tertinggi</th>
                                <th scope="col">Harga terendah</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sahamData as $result)
                                <?php
                                $symbol = $result['kode'];
                                $name = $result['nama'];
                                $logo = $result['logo'];
                                $harga = $result['harga'];
                                $high = $result['tertinggi'];
                                $low = $result['terendah'];
                                $tgl = $result['tradetime'];
                                $cur = $result['currency'];
                                ?>
                                <tr>
                                    <a type="button" href="/saham/detail/{{ $symbol }}">
                                        <th scope="row"><a type="button" class="none-text"
                                                href="/saham/detail/{{ $symbol }}">{{ $symbol }}</a>
                                        </th>
                                        <td><a type="button" class="none-text" href="/saham/detail/{{ $symbol }}"><img
                                                    src="<?= $logo ?>" class="img-thumbnail img-fluid"
                                                    alt="<?php echo $symbol; ?>" height="80" width="80"></a></td>
                                        <td><a type="button" class="none-text"
                                                href="/saham/detail/{{ $symbol }}"><?= $name ?></a></td>
                                        <td><?= $harga ?></td>
                                        <td><?= $cur ?></td>
                                        <td><?= $high ?></td>
                                        <td><?= $low ?></td>
                                        <td><a href="/saham/detail/{{ $symbol }}" class="btn btn-secondary"
                                                type="button"><i class="bi bi-box-arrow-up-right"></i></a></td>
                                    </a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 70px" class="mobile"></div>
@endsection
