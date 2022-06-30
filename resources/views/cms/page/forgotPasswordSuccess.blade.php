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

    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class="alert alert-primary">
        Email Sent! Please check your email to reset your account's password
      </div>

      <div class="btn btn-primary"><a href="{{ route("home-id") }}" class="text-white">Back to Home</a></div>
    </div>
@endsection

@section('custom-js')

@endsection