<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MFP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" href="safe2-fill.ico" type="image/svg+xml">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <!-- <style>
    /* CSS untuk desktop (50% lebar) */
    @media (min-width: 992px) {
      .carousel img {
        width: 80%;
      }
    }

    /* CSS untuk seluler (100% lebar) */
    @media (max-width: 991px) {u
      .carousel img {
        width: 100%;
      }
    }

    @media (min-width: 992px) {
      .navbar-desktop {
        display: block;
      }

      .navbar-mobile {
        display: none;
      }
    }

    @media (max-width: 991px) {
      .navbar-desktop {
        display: none;
      }

      .navbar-mobile {
        display: block;
      }
    }

    .navbar-desktop {
      background-color: whitesmoke;
    }

    .navbar-mobile {
      background-color: whitesmoke;
    }

    .carousel {
      background-color: rgb(227, 227, 227);
    }

    div.card-custom {
      border: 0px;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 1px 10px 0 rgba(0, 0, 0, 0.19);
    }

    .card-transparant {
      border: 0px;
    }

    .shadow {
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 0px 1000px 0 rgba(0, 0, 0, 0.19);
    }

    .card-transparant {
      border: 0px;
    }

    .scroll {
      overflow-y: scroll;
      /* Use "scroll" instead of "auto" */
      scrollbar-width: thin;
      /* Firefox */
      scrollbar-color: transparent transparent;
      /* Firefox */
    }

    .scroll::-webkit-scrollbar {
      width: 5px;
    }

    .scroll::-webkit-scrollbar-track {
      background-color: transparent;
      /* or any color you prefer */
    }

    .scroll::-webkit-scrollbar-thumb {
      background-color: transparent;
      /* make it transparent initially */
      border-radius: 3px;
      border: 3px solid transparent;
      /* make it transparent */
    }

    .scroll:hover::-webkit-scrollbar-thumb {
      background-color: #cbcbcb;
      /* change color on hover if desired */
    }

    .scroll:hover::-webkit-scrollbar-thumb:hover {
      background-color: #a2a2a2;
      /* change color on hover if desired */
    }
  </style> -->
</head>

<body style="background-color: rgb(240, 240, 240);">
  <!-- Navbar Top Desktop -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-desktop">
    <div class="container">
      <h2><a class="navbar-brand" href="#"><i class="bi bi-safe2-fill"></i> MFP</a></h2>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text-end">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="new.html">Home</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link btn btn-outline-secondary" href="/login" style="border-radius: 17px; width: 90px;">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar Top Mobile -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-mobile">
    <div class="container">
      <h5 class="navbar-brand"><i class="bi bi-safe2-fill"></i> MFP</h5>
      <div class="text-end">
        <ul class="navbar-nav me-auto mb-2">
          <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li> -->
          <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary" href="/login" style="border-radius: 17px; width: 90px;">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Bottom Navbar -->
  <!-- <nav class="navbar navbar-expand navbar-expand-lg fixed-bottom navbar-mobile" style="background-color: white;">
    <ul class="navbar-nav nav-justified w-100">
      <li class="nav-item">
        <a href="index.php" class="nav-link active"><i class="bi bi-house-fill"></i></a>
      </li>
      <li class="nav-item">
        <a href="buy.php" class="nav-link"><i class="bi bi-bag-fill"></i></a>
      </li>
      <li class="nav-item">
        <a href="profile.php" class="nav-link"><i class="bi bi-person-fill"></i></a>
      </li>
    </ul>
  </nav> -->

  <!-- content -->
  <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container">
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
      {
        "symbols": [{
            "proName": "BITSTAMP:BTCUSD",
            "title": "Bitcoin"
          },
          {
            "proName": "BITSTAMP:ETHUSD",
            "title": "Ethereum"
          },
          {
            "description": "IDR",
            "proName": "FX_IDC:IDRUSD"
          },
          {
            "description": "GOLD",
            "proName": "OANDA:XAUUSD"
          },
          {
            "description": "BCA",
            "proName": "IDX:BBCA"
          },
          {
            "description": "BRI",
            "proName": "IDX:BBRI"
          }
        ],
        "showSymbolLogo": true,
        "colorTheme": "light",
        "isTransparent": true,
        "displayMode": "adaptive",
        "locale": "id"
      }
    </script>
  </div>
  <!-- TradingView Widget END -->

  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-10 col-md-12">
        <div class="card card-custom mb-3" style="border-radius: 20px;">
          <div class="card-body">
            <div class="container">
              <!-- <div class="row">
                <div class="col-3">
                  <div class="container">
                    <div class="card" style="border-radius: 17px; border: 0px solid transparent;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="container">
                    <div class="card" style="border-radius: 17px; border: 0px solid transparent;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="container">
                    <div class="card" style="border-radius: 17px; border: 0px solid transparent;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="container">
                    <div class="card" style="border-radius: 17px; border: 0px solid transparent;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
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
                    "isTransparent": false,
                    "showSymbolLogo": true,
                    "locale": "id"
                  }
                </script>
              </div>
              <!-- TradingView Widget END -->

              <div class="row">
                <div class="container mt-4">
                  <div class="container">
                    <div class="card card-transparant">
                      <h1 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 3vw; letter-spacing: 3px;">
                        <p style="font-size: 5vw; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                          <b>KEUANGAN</b>
                        </p>
                        <p> Anda Lebih Mudah Dengan</p>
                        <p style="font-size: 5vw; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                          <b><i class="bi bi-safe2-fill"></i> MFP</b>
                        </p>
                      </h1>
                      <!-- TradingView Widget BEGIN -->
                      <div class="tradingview-widget-container mb-2">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                          {
                            "symbol": "FX_IDC:IDRUSD",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "12M",
                            "colorTheme": "light",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                          }
                        </script>
                      </div>
                      <!-- TradingView Widget END -->

                      <!-- <p class="mt-1">Akses informasi terkini tentang saham, mata uang kripto, dan forex di Indonesia.</p> -->
                      <!-- <p>Saham Indonesia: Pantau harga saham BEI dan analisis lengkap.</p>
                      <p>Crypto: Lihat harga dan tren mata uang kripto terkemuka.</p>
                      <p>Forex: Analisis pasangan mata uang asing.</p> -->
                    </div>
                  </div>

                  <div class="container mt-4 text-end">
                    <p>Ayo Mulai Sekarang</p>
                    <a type="button" href="/login" class="btn btn-outline-secondary" style="border-radius: 15px;width: 140px;">Disini</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-12">
        <div class="row mb-3">
          <div class="container">
            <div class="card card-custom" style="border-radius: 17px;">
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <div class="card card-transparant">
                      <h1><i class="bi bi-shop-window"></i></h1>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card card-transparant">
                      <h5>Pasar Finansial</h5>
                    </div>
                  </div>
                </div>
                <p>Akses informasi tentang investasi.</p>
                <!-- <h5 class="card-title"><i class="bi bi-shop-window"></i>Pasar Finansial</h5> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="container">
            <div class="card card-custom" style="border-radius: 17px;">
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <div class="card card-transparant">
                      <h1><i class="bi bi-file-earmark-text-fill"></i></h1>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card card-transparant">
                      <h5>Portofolio</h5>
                    </div>
                  </div>
                </div>
                <p>Akses informasi tentang investasi.</p>
                <!-- <h5 class="card-title"><i class="bi bi-file-earmark-text-fill"></i>Portofolio</h5> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="container">
            <div class="card card-custom" style="border-radius: 17px;">
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <div class="card card-transparant">
                      <h1> <i class="bi bi-graph-up"></i></h1>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card card-transparant">
                      <h5>Market Watch</h5>
                    </div>
                  </div>
                </div>
                <p>Akses informasi tentang investasi.</p>
                <!-- <h3 class="card-title"><i class="bi bi-graph-up"></i>Market Watch</h3> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>