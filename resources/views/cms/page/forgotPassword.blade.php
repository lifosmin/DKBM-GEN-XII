@extends('cms.base.app')

@section('custom-css')
<style>
    .form{
        width: 80%;
        display: block;
        margin: 20px auto;
    }

    .section-main{
      min-height:70vh;
      
    }

    body{
      background-color: #f8fafc;
      font-family: "Poppins", sans-serif;
    }

    .btn-masuk{
      transition: 0.2s;
      color: white; 
      background-color:rgba(1, 4, 136, 0.9)
    }

    .btn-masuk:hover{
      transition: 0.2s;
      color: white; 
      background-color: rgb(2 5 106 / 90%);
    }
</style>
<link rel="stylesheet" href="{{ asset('css/validation.css') }}">
@endsection

@section('content')

<div class="section-main" >
<div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>
  <div class="container h-100 m-auto p-3" style="background-color: white; box-shadow: 0px 3.76545px 3.76545px rgba(0, 0, 0, 0.25); border-radius:25px">
    <h1 class="text-center">Reset Password</h1>
    @if (session('status'))
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ url("/password/forgot") }}" method="POST" class="form" id="form-login">
      @csrf
      <div class="mb-3">
        <label for="Email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email address">
      </div>

      @if(session("user_not_found") == true)
        <div class="alert alert-danger p-2">
          User not found
        </div>
      @endif

      <button type="submit" class="btn btn-masuk">Reset Password</button>

      <p class="description mb-0 mt-2">
      Already remember your password ? <a style="color:rgba(1, 4, 136, 0.9)" href="{{ url("/login") }}">Login</a>
      </p>

      <p class="description">
      Don't have an account? Sign up now! <a style="color:rgba(1, 4, 136, 0.9)" href="{{ url("/registration") }}">Register</a>
      </p>
    </form>
  </div>
</div>

@endsection

@section('custom-js')
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="{{ asset('js/validation/login-en.js') }}"></script>
  <script>
    $(document).ready(function(){
      $('#showPassword').on('change', function(){
        $('#password').attr('type',$('#showPassword').prop('checked')==true?"text":"password"); 
      });
    });
    </script>
@endsection