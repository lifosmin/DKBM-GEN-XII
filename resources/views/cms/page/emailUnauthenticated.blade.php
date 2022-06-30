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
        <div class="alert alert-danger">
            Oops... looks like your email is not verified yet, pleace check your email to verify or click the button below to resend verification mail
        </div>

        <div>
            <form action="{{ route('email-verification-resend') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Resend Email!</button>
            </form>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
