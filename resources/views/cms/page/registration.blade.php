  @extends('cms.base.app')

@section('custom-css')
<style>
    .form{
        width: 80%;
        display: block;
        margin: 20px auto;
    }

    .section-main{
      min-height:100vh;
      
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
  <!-- <link rel="stylesheet" href="{{ asset('css/registration.css') }}"> -->
@endsection

@section('content')

<div class="section-main" >
<div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>
  <div class="container h-100 m-auto p-3" style="background-color: white; box-shadow: 0px 3.76545px 3.76545px rgba(0, 0, 0, 0.25); border-radius:25px">
    <h1 class="text-center">SELAMAT DATANG!</h1>
    @if (session('status'))
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('registration') }}" method="POST" class="formRegistration">
            @csrf
            <div class="mb-0">
              <label for="input-nama" class="form-label"></label>
              <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="input-nama" name="Nama" placeholder="Nama" value="{{ old("Nama") }}">
            </div>
            @error('Nama')
                <div class="alert alert-danger p-2 mb-0">
                    Nama hanya boleh mengandung karakter a-z dan spasi!
                </div>
            @enderror

            <div class="mb-0">
              <label for="input-email" class="form-label"></label>
              <input type="email" class="form-control @error('Email') is-invalid @enderror" id="input-email" name="Email" placeholder="Email" value="{{ old("Email") }}">
            </div>
            @error('Email')
                <div class="alert alert-danger p-2 mb-0">
                    Pastikan email anda valid dan berakhiran student.umn.ac.id atau lecturer.umn.ac.id
                </div>
            @enderror

            <div class="mb-0">
              <label for="input-password" class="form-label"></label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="input-password" name="password" placeholder="Password">
              <div class="text-start justify-content-start mt-2">
                <input type="checkbox" id="showPassword"> Show Password
              </div>
            </div>

            <div class="mb-0">
              <label for="input-nim" class="form-label"></label>
              <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="input-nim" name="NIM" value="{{ old('NIM') }}" placeholder="NIM">
            </div>
            @error('NIM')
              <div class="alert alert-danger p-2 mb-0">
                  Pastikan nim anda benar dan didahului dengan 000000
              </div>
            @enderror 

            <div class="mb-0">
                <label for="input-jurusan" class="form-label"></label>
                <select class="form-select form-select-md" name="Jurusan">
                    <option @if(old('Jurusan') != 'Informatika') selected @endif value="Informatika">Informatika</option>
                    <option @if(old('Jurusan') === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                    <option @if(old('Jurusan') === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                    <option @if(old('Jurusan') === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                    <option @if(old('Jurusan') === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                    <option @if(old('Jurusan') === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                    <option @if(old('Jurusan') === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                    <option @if(old('Jurusan') === "Perhotelan") selected @endif value="Perhotelan">Perhotelan</option>
                    <option @if(old('Jurusan') === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                    <option @if(old('Jurusan') === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                    <option @if(old('Jurusan') === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option @if(old('Jurusan') === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                    <option @if(old('Jurusan') === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
                </select>
            </div>
            
            <div class="mb-0">
              <label for="input-nomorWA" class="form-label"></label>
              <input type="text" class="form-control @error('nomorWA') is-invalid @enderror" id="input-nomorWA" name="nomorWA" value="{{ old('nomorWA') }}" placeholder="Nomor WA">
              @error('nomorWA')
                <div class="alert alert-danger p-2 mb-0">
                    Data Nomor WA harus diisi!
                </div>
              @enderror
            </div>

            <div class="mb-0">
              <label for="input-ID_Line" class="form-label"></label>
              <input type="text" class="form-control @error('ID_Line') is-invalid @enderror"  id="input-ID_Line" name="ID_Line" value="{{ old('ID_Line') }}" placeholder="ID Line">
            </div>

            @error('ID_Line')
              <div class="alert alert-danger p-2 mb-0">
                  Data ID Line harus diisi!
              </div>
            @enderror

            <div class="d-flex justify-content-center w-100 flex-column text-center">
              <a href="#" class="btn btn-masuk mx-auto fw-bold mt-4" id="register-submit">REGISTER</a>
            </div>
        </form>

      <p class="description mt-2">
          Sudah memiliki akun? Login Sekarang! <a style="color:rgba(1, 4, 136, 0.9)" href="{{ url("/registration") }}">Login</a>
      </p>
    </form>
  </div>
</div>

@endsection

@section('custom-js')
<script>
$(document).ready(function(){
  $('#showPassword').on('change', function(){
    $('#input-password').attr('type',$('#showPassword').prop('checked')==true?"text":"password"); 
  });
});
</script>
<script src="{{ asset('js/cms/registrationNotice.js') }}"></script>
@endsection