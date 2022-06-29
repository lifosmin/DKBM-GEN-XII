@extends('cms.base.app')

@section('custom-css')
    <style>
        .container {
            min-height: 50vh;
        }
    </style>
@endsection

@section('content')
    <div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>

    <div class="container d-flex align-items-center flex-column justify-content-center gap-4">
        <div class="status-description">
            Kode verifikasi baru telah dikirimkan ulang ke email kamu, gas dicek gan
        </div>

        <div>
            <button class="btn btn-primary"><a href="{{ route('home') }}" class="text-white">Back to Home</a></button>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
