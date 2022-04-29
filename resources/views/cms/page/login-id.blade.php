@extends('cms.base.app')

@section('custom-css')
<style>
    .form{
        width:50%;
        display: block;
        margin: 20px auto;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/validation.css') }}">
@endsection

@section('content')
<div class="container my-5">
    <h1 class="text-center">SELAMAT DATANG!</h1>
    @if (session('status'))
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('verifikasiLogin') }}" method="POST" class="form" id="form-login">
      @csrf
      <div class="mb-3">
        <label for="Email" class="form-label">Alamat Email</label>
        <input type="email" class="form-control" id="email" name="Email" placeholder="Masukkan Email Anda">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi Anda">
      </div>
      <button type="submit" class="btn btn-primary">MASUK</button>

      <p class="description mt-2">
          Belum memiliki akun? Daftar Sekarang! <a href="{{ url("/registration") }}">Daftar</a>
      </p>
    </form>
  </div>
@endsection

@section('custom-js')
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="{{ asset('js/validation/login-id.js') }}"></script>
@endsection