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
            Sepertinya kamu belum Aktivasi email nih, di aktifin dulu yuk
        </div>

        <div>
            <form action="{{ route('email-verification-resend', ['link' => auth()->user()->email_verify_id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Resend Email!</button>
            </form>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
