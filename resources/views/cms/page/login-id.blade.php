@extends('cms.base.app')

@section('custom-css')
    <style>
        .form {
            width: 80%;
            display: block;
            margin: 20px auto;
        }

        .section-main {
            min-height: 100vh;

        }

        body {
            background-color: #f8fafc;
            font-family: "Poppins", sans-serif;
        }

        .btn-masuk {
            transition: 0.2s;
            color: white;
            background-color: rgba(1, 4, 136, 0.9)
        }

        .btn-masuk:hover {
            transition: 0.2s;
            color: white;
            background-color: rgb(2 5 106 / 90%);
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/validation.css') }}">
@endsection

@section('content')
    <div class="section-main">
        <div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>
        <div class="container h-100 m-auto p-3"
            style="background-color: white; box-shadow: 0px 3.76545px 3.76545px rgba(0, 0, 0, 0.25); border-radius:25px">
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
                    <input type="email" class="form-control" id="email" name="Email"
                        placeholder="Masukkan Email Anda">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan kata sandi Anda">
                    <div class="text-start justify-content-start mt-2">
                        <input type="checkbox" id="showPassword"> Show Password
                    </div>
                </div>
                <button type="submit" class="btn btn-masuk" style="">MASUK</button>

                <p class="description mt-2 mb-0">
                    Belum memiliki akun? Daftar Sekarang! <a style="color:rgba(1, 4, 136, 0.9)"
                        href="{{ url('/registration') }}">Daftar</a>
                </p>

                <p class="description">
                    Lupa Password ? <a style="color:rgba(1, 4, 136, 0.9)"
                        href="{{ url('/password/forgot') }}">Reset Password</a>
                </p>
            </form>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/validation/login-id.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#showPassword').on('change', function() {
                $('#password').attr('type', $('#showPassword').prop('checked') == true ? "text" :
                    "password");
            });
        });
    </script>
@endsection
