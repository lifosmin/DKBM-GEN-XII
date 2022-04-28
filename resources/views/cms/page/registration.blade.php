  @extends('cms.base.app')

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@endsection

@section('content')
<div class="container py-5 drought-form">
  <div class="m-auto py-3 overlay-background justify-content-center d-flex flex-column text-center">
      <h1 class="text-center m-auto text-white mt-2">DKBM Form Registration</h1>
      <div class="container mt-1 d-flex justify-content-center m-auto">
        <form action="{{ route('registration') }}" method="POST">
            @csrf
            <div class="mb-2">
              <label for="input-nama" class="form-label"></label>
              <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="input-nama" name="Nama" placeholder="Nama" value="{{ old("Nama") }}">
            </div>
            @error('Nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <div class="mb-2">
              <label for="input-email" class="form-label"></label>
              <input type="email" class="form-control @error('Email') is-invalid @enderror" id="input-email" name="Email" placeholder="Email" value="{{ old("Email") }}">
            </div>
            @error('Email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <div class="mb-2">
              <label for="input-password" class="form-label"></label>
              <input type="password" class="form-control @error('Password') is-invalid @enderror" id="input-password" name="Password" placeholder="Password">
            </div>

            <div class="mb-2">
              <label for="input-nim" class="form-label"></label>
              <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="input-nim" name="NIM" value="{{ old('NIM') }}" placeholder="NIM">
              @error('NIM')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror 
            </div>

            <div class="mb-2">
                <label for="input-jurusan" class="form-label"></label>
                <select class="form-select form-select-md" name="jurusan">
                    <option @if(old('jurusan') != 'Informatika') selected @endif value="Informatika">Informatika</option>
                    <option @if(old('jurusan') === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                    <option @if(old('jurusan') === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                    <option @if(old('jurusan') === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                    <option @if(old('jurusan') === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                    <option @if(old('jurusan') === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                    <option @if(old('jurusan') === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                    <option @if(old('jurusan') === "Perhotelan") selected @endif value="Perhotelan">Perhotelan</option>
                    <option @if(old('jurusan') === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                    <option @if(old('jurusan') === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                    <option @if(old('jurusan') === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option @if(old('jurusan') === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                    <option @if(old('jurusan') === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
                </select>
            </div>
            
            <div class="mb-2">
              <label for="input-nomorWA" class="form-label"></label>
              <input type="text" class="form-control @error('nomorWA') is-invalid @enderror" id="input-nomorWA" name="nomorWA" value="{{ old('nomorWA') }}" placeholder="Nomor WA">
              @error('nomorWA')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-2">
              <label for="input-ID_Line" class="form-label"></label>
              <input type="text" class="form-control @error('ID_Line') is-invalid @enderror"  id="input-ID_Line" name="ID_Line" value="{{ old('ID_Line') }}" placeholder="ID Line">
              @error('ID_Line')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="d-flex justify-content-center w-100 flex-column text-center">
              <button type="submit" class="button-submit mx-auto fw-bold">REGISTER</button>
            </div>
        </form>
    </div>

    
    <div class="d-flex justify-content-center w-100 flex-column text-center text-white">
      <p class="pt-3 mb-0 text-center">Already have an account ? <a href="{{ route('login') }}" class="text-decoration-underline text-white fw-bolder">Login here!</a></p>
      <p class="contact-us text-center">If you are having trouble logging in, please <a href="#" class="text-decoration-underline text-white fw-bolder">contact us</a> through our LINE Official Account</p>
    </div>
  </div>
</div>
@endsection
