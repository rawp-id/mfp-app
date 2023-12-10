<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('safe2-fill.ico') }}" type="image/svg+xml">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
</head>

<body style="background-color: rgb(240, 240, 240);">
    <!-- Navbar Top Desktop -->
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-desktop">
        <div class="container">
            <h2><a class="navbar-brand" href="/home"><i class="bi bi-safe2-fill"></i> MFP</a></h2>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="text-end">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                                href="/home">Home</a>
                        </li>
                        <!-- <li class="nav-item">
              <a class="nav-link btn btn-outline-secondary" href="login.html"
                style="border-radius: 17px; width: 90px;">Login</a>
            </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ $title === 'Saham' ? 'active' : '' }}{{ $title === 'Crypto' ? 'active' : '' }}{{ $title === 'Forex' ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pasar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ $title === 'Saham' ? 'active-drop' : '' }}"
                                        href="/saham">Saham</a></li>
                                <li><a class="dropdown-item {{ $title === 'Crypto' ? 'active-drop' : '' }}"
                                        href="/crypto">Cryto</a></li>
                                <li><a class="dropdown-item {{ $title === 'Forex' ? 'active-drop' : '' }}"
                                        href="/forex">Forex</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">Log
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @if ($title != 'chat')
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
        @endif
    </nav>

    <!-- Bottom Navbar -->
    <nav class="navbar fixed-bottom navbar-desktop" style="background-color: transparent;">
        <div class="container-fluid text-end">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <button type="button" id="chatToastBtn" class="btn btn-secondary" style="border-radius: 500px;">
                        <i class="bi bi-chat-square-text-fill" style="font-size: 25px; color: white;"></i>
                    </button>
                </li>

            </ul>
        </div>
    </nav>

    {{-- chat --}}
    <div class="toast-container position-fixed bottom-0 end-0 me-2 mb-2">
        <div id="chatToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="safe2-fill.svg" class="rounded me-2" alt="...">
                <strong class="me-auto">Chat Forum</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body scroll scroll-max">
                <div class="table-responsive">
                    <table class="table">
                        <div class="card mb-3">
                            <br>
                            <br>
                        </div>
                        <div class="card mb-3">
                            <br>
                            <br>
                        </div>
                        <div class="card mb-3">
                            <br>
                            <br>
                        </div>
                        <div class="card mb-3">
                            <br>
                            <br>
                        </div>
                        <div class="card mb-3">
                            <br>
                            <br>
                        </div>
                    </table>
                </div>
            </div>

            <div class="input-group">
                <input type="text" class="form-control chat-input" placeholder="Ketik Chat Anda...">
                <button class="btn send-button" onclick="sendMessage()">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Navbar Top Mobile -->
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-mobile">
        <div class="container">
            <h5 class="navbar-brand"><i class="bi bi-safe2-fill"></i> MFP</h5>
            <div class="text-end">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-person-fill"
                                style="font-size: 25px;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        @if ($title != 'chat')
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
        @endif
    </nav>

    <!-- Bottom Navbar -->
    <nav class="navbar navbar-expand navbar-expand-lg fixed-bottom navbar-mobile"
        style="background-color: white; border: 1px solid rgb(198, 197, 197);">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="/home" class="nav-link {{ $title === 'Home' ? 'active' : '' }}"><i
                        class="bi bi-house-fill" style="font-size: 25px;"></i></a>
            </li>
            <li class="nav-item">
                <a href="/saham" class="nav-link {{ $title === 'Saham' ? 'active' : '' }}"><i
                        class="bi bi-file-bar-graph-fill" style="font-size: 25px;"></i></a>
            </li>
            <li class="nav-item">
                <a href="/chat" class="nav-link {{ $title === 'chat' ? 'active' : '' }}"><i
                        class="bi bi-chat-square-text-fill" style="font-size: 25px;"></i></a>
            </li>
        </ul>
    </nav>



    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <main class="py-2">
        @yield('content')
    </main>

    <footer class="py-3 navbar-desktop">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 MPF, Inc</p>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
        $(document).ready(function() {
            $('#chatToastBtn').click(function() {
                var toast = new bootstrap.Toast(document.getElementById('chatToast'), {
                    autohide: false
                });
                toast.show();
            });
        });
        $(document).ready(function() {
            // Menampilkan toast ketika halaman dimuat dan pengguna sudah login
            var welcomeToast = new bootstrap.Toast(document.getElementById('welcomeToast'));
            welcomeToast.show();
        });
        $(document).ready(function() {
            // Menampilkan toast ketika halaman dimuat dan pengguna sudah login
            var welcomeToast = new bootstrap.Toast(document.getElementById('welcomeToastMobile'));
            welcomeToast.show();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
