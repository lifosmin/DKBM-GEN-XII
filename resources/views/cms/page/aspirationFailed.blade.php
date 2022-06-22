@extends('cms.base.app')

@section('custom-css')
  <style>
    .error-container {
      min-height: 60vh;
      display: flex;
      justify-content: center;
      align-items:center;
      flex-direction: column;
      gap: 1em;
    }

    .error-button {
      width: 10%;
    }
  </style>
@endsection

@section('content')
  <div class="d-block w-100" style="height: 80px; background-color: rgb(1, 4, 136)"></div>

  <div class="container error-container">
    <h1>Hanya bisa 1x kirim aspirasi dalam 30 menit!</h1>
    <a href="{{ route("home") }}" class="btn btn-danger error-button">Ok</a>
  </div>
@endsection

@section('custom-js')

@endsection