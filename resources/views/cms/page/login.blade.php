@extends('cms.base.app')

@section('custom-css')
<style>
    .form{
        width:50%;
        display: block;
        margin: 20px auto;
    }
</style>
@endsection

@section('content')
<div class="container text-center my-5">
    <h1>WELCOME!</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('loginVerification') }}" method="POST" class="form">
      @csrf
      <div class="mb-3 form-floating">
        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your Email">
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">
        <label for="floatingInput">Password</label>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>

      {{-- <p class="description">
          Don't have an account? <a href="">Register</a>
      </p> --}}
    </form>
  </div>
@endsection