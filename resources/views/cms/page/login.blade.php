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
    <h1 class="text-center">WELCOME!</h1>
    @if (session('status'))
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('loginVerification') }}" method="POST" class="form" id="form-login">
      @csrf
      <div class="mb-3">
        <label for="Email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your Email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>

      {{-- <p class="description">
          Don't have an account? <a href="">Register</a>
      </p> --}}
    </form>
  </div>
@endsection

@section('custom-js')
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="{{ asset('js/validation/login-en.js') }}"></script>
@endsection