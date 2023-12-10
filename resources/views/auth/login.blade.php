@extends('layouts.nav-log')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="card card-custom mb-3" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="container">
                            <h1 class="text-center"><i class="bi bi-safe2-fill" style="font-size: 50px;"></i></h1>
                            <h1 class="text-center"
                                style="font-size: 35px; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                Welcome to MFP</h1>
                            <p class="text-center">Tidak punya akun? <a href="/register"
                                    style="text-decoration: none; color: black;"><b>Sign
                                        Up</b></a></p>
                            <hr>
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if (session('info'))
                                <div class="alert alert-info">
                                    {{ session('info') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">{{ __('Email') }}</label>
                                    <input type="email"
                                        class="form-control shadow @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
                                    <input type="password"
                                        class="form-control shadow @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Ingatkan Saya</label>
                                </div>
                                <div class="mb-3">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            style="text-decoration: none; color: black;"><b>Lupa
                                                Password?</b></a>
                                    @endif
                                </div>
                                <p>Informasi ini akan disimpan dengan aman sesuai <a
                                        href="https://policies.google.com/"
                                        style="text-decoration: none; color: black;"><b>Ketentuan Layanan & Kebijakan
                                            Privasi</b></a></p>
                                <div class="text-center mt-4 mb-4">
                                    <button type="submit" class="btn btn-secondary shadow"
                                        style="border-radius: 18px; width: 250px;">Login</button>
                                </div>
                            </form>
                            {{-- <hr>
                            <div class="text-center mt-4 mb-4">
                                <p>Masuk dengan Akun</p>
                                <button type="submit" class="btn btn-primary shadow"
                                    style="border-radius: 18px; width: 250px;"><i class="bi bi-google"></i>
                                    Google</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

