<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MFP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" href="safe2-fill.svg" type="image/svg+xml">
  <!-- <link rel="stylesheet" href="../views/style.css"> -->
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="background-color: rgb(240, 240, 240);">
  <!-- Navbar Top Desktop -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-desktop">
    <div class="container">
      <h2><a class="navbar-brand" href="#"><i class="bi bi-safe2-fill"></i> MFP</a></h2>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text-end">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Back</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link btn btn-outline-secondary" href="#" style="border-radius: 17px; width: 90px;">Login</a>
            </li> -->
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
            <a class="nav-link" aria-current="page" href="/"><i class="bi bi-arrow-left"></i> Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- content -->
  <!-- TradingView Widget BEGIN -->
  <!-- <div class="tradingview-widget-container">
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
      async>
        {
          "symbols": [
            {
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
  </div> -->
  <!-- TradingView Widget END -->

  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-12">
        <div class="card card-custom mb-3" style="border-radius: 20px;">
          <div class="card-body">
            <div class="container">
              <h1 class="text-center"><i class="bi bi-safe2-fill" style="font-size: 50px;"></i></h1>
              <h1 class="text-center"
                style="font-size: 35px; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                Welcome to MFP</h1>
              <p class="text-center">Tidak punya akun? <a href="" style="text-decoration: none; color: black;"><b>Sign
                    Up</b></a></p>
              <hr>
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email*</label>
                  <input type="email" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" class="form-control shadow" id="exampleInputPassword1">
                </div>
                <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
                </div> -->
                <div class="mb-3">
                  <a href="" style="text-decoration: none; color: black;"><b>Lupa Password?</b></a>
                </div>
                <p>Informasi ini akan disimpan dengan aman sesuai <a href="https://policies.google.com/"
                    style="text-decoration: none; color: black;"><b>Ketentuan Layanan & Kebijakan Privasi</b></a></p>
                <div class="text-center mt-4 mb-4">
                  <button type="submit" class="btn btn-secondary shadow"
                    style="border-radius: 18px; width: 200px;">Login</button>
                </div>
              </form>
              <hr>
              <div class="text-center mt-4 mb-4">
                <p>Masuk dengan Akun</p>
                <button type="submit" class="btn btn-primary shadow" style="border-radius: 18px; width: 250px;"><i
                    class="bi bi-google"></i> Google</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>