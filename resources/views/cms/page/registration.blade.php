  @extends('cms.template.app')

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/cms/page/droughtRegis.css') }}">
@endsection

@section('content')
<div class="container py-5 drought-form">
  <div class="py-3 overlay-background justify-content-center d-flex flex-column text-center">
    <!-- <div class="w-100 d-flex justify-content-center"></div> -->
      <img src="{{ asset('images/umn-eco-logo.png')}}" class="py-4 umn-eco-logo text-center m-auto">
      <h1 class="text-center m-auto">WELCOME!</h1>
      <div class="container mt-1 d-flex justify-content-center m-auto">
        <form action="{{ route('register-id') }}" method="POST">
            @csrf
            <div class="mb-2">
              <label for="input-email" class="form-label"></label>
              <input type="email" class="form-control" id="input-email" name="email_student" placeholder="Email">
            </div>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-2">
              <label for="input-password" class="form-label"></label>
              <input type="password" class="form-control" id="input-password" name="password" placeholder="Password">
            </div>
            <div class="mb-2">
              <label for="input-name" class="form-label"></label>
              <input type="text" class="form-control" id="input-name" name="nama" placeholder="Nama">
            </div>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-2">
              <label for="input-nim" class="form-label"></label>
              <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="input-nim" name="nim" value="{{ old('NIM') }}" placeholder="NIM">
              @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror 
            </div>
            <div class="mb-2">
              <label for="input-angkatan" cass="form-label"></label>
              <select class="form-select form-select-md" name="angkatan">
                  <option @if(old('angkatan') != "2017") selected @endif value="2017">2017</option>
                  <option @if(old('angkatan') === "2018") selected @endif value="2018">2018</option>
                  <option @if(old('angkatan') === "2019") selected @endif value="2019">2019</option>
                  <option @if(old('angkatan') === "2020") selected @endif value="2020">2020</option>
                  <option @if(old('angkatan') === "2021") selected @endif value="2021">2021</option>
              </select>
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
              <label for="input-username_instagram" class="form-label"></label>
              <input type="text" class="form-control @error('username_instagram') is-invalid @enderror" id="input-username_instagram" name="username_instagram" value="{{ old('username_instagram') }}" placeholder="Instagram">
              @error('username_instagram')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="input-id_line" class="form-label"></label>
              <input type="text" class="form-control @error('id_line') is-invalid @enderror"  id="input-id_line" name="id_line" value="{{ old('id_line') }}" placeholder="ID Line">
              @error('id_line')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="input-telephone" class="form-label"></label>
              <input type="text" class="form-control @error('telephone') is-invalid @enderror"  id="input-telephone" name="telephone" value="{{ old('telephone') }}" placeholder="Nomor Telepon">
              @error('telephone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="d-flex justify-content-center w-100 flex-column text-center">
              <button type="submit" class="button-submit mx-auto">REGISTER</button>
            </div>
        </form>
    </div>

    
    <div class="d-flex justify-content-center w-100 flex-column text-center text-color-green">
      <p class="pt-3 mb-0 text-white text-center">Already have an account ? <a href="{{ route('loginDrought') }}">Login here!</a></p>
      <p class="contact-us text-white text-center">If you are having trouble logging in, please <a href="#">contact us</a> through our LINE Official Account</p>
    </div>
  </div>
</div>
@endsection
