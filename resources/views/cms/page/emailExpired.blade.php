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

    <div class="container d-flex flex-column justify-content-center align-items-center gap-3">
        <div class="status-description">
            Oops... sepertinya waktu verifikasi kamu sudah habis nih...
        </div>

        <div>
            <form action="{{ route('email-verification-resend', ['link' => $link]) }}" method="POST">
                @csrf
                <button type="submit" href="{{ route('email-verification-resend', ['link' => $link]) }}"
                    class="btn btn-primary">Resend Email!</button>
            </form>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
