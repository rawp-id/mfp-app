@extends('layouts.myapp')
@section('content')
    <div class="container">
        <div class="card card-custom" style="border-radius: 17px; height: 370px;">
            <div class="card-header text-center" style="background-color: transparent;">
                <div class="btn-group container-fluid" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="btnradio1">Saham</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btnradio2">Crypto</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btnradio3">Forex</label>
                </div>
            </div>
            <div class="card-body scroll">
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
            <div class="card-footer" style="background-color: transparent;">
                <form action="" method="">
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea">
                            <label for="floatingTextarea">Chat</label>
                        </div>
                        <button class="btn btn-secondary" type="button" id="button-addon2"><i
                                class="bi bi-send-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
