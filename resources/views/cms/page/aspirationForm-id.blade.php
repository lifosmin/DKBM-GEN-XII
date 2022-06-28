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
    <link rel="stylesheet" href="{{ asset('css/aspiration.css') }}">
    <link rel="stylesheet" href="{{ asset('css/validation.css') }}">
@endsection

@section('content')
<div class="section-main" >
<div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>
  <div class="container h-100 m-auto p-3" style="background-color: white; box-shadow: 0px 3.76545px 3.76545px rgba(0, 0, 0, 0.25); border-radius:25px">
  <h1 class="text-center">Form Aspirasi</h1>
    @if (session('status'))
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('verifikasiAspirasi') }}" method="POST" class="form-margin" id="form-aspirasi">
        @csrf
        <div class="mb-3">
            <label for="Resi" class="form-label">Resi Anda</label>
            <input type="text" class="form-control @error('Resi') is-invalid @enderror" id="Resi" name="Resi" value="{{ $Resi }}" disabled>
            <input type="hidden" class="form-control" id="Resi" name="Resi" value="{{ $Resi }}">
            <input type="hidden" class="form-control" id="User_id" name="User_id" value="{{ $User_id }}">
        </div>
        <div class="mb-3">
            <label for="CategorySelect" class="form-label">Kategori</label>
            <select id="CategorySelect" class="form-select @error('Kategori') is-invalid @enderror" name="Kategori">
              <option @if(old('Kategori') == 'Akademik') selected @endif value="Akademik">Akademik</option>
              <option @if(old('Kategori') == 'Non-Akademik') selected @endif value="Non-Akademik">Non-Akademik</option>
              <option @if(old('Kategori') == 'Fasilitas') selected @endif value="Fasilitas">Fasilitas</option>
              <option @if(old('Kategori') == 'Kegiatan') selected @endif value="Kegiatan">Kegiatan</option>
            </select>
            <div class="mx-2">
                <small id="description">Aspirasi Akademik adalah Aspirasi yang melingkupi semua kegiatan yang berhubungan dengan kegiatan belajar mengajar.</small>
            </div>
            @error('Kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="IsiAspirasi" class="form-label">Aspirasi Anda</label>
            <textarea class="form-control @error('Isi') is-invalid @enderror" id="IsiAspirasi" name="Isi" rows="3"></textarea>
                
            @error('Isi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-masuk">Submit</button>
    </form>
  </div>
</div>

@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="{{ asset('js/aspiration-id.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/validation/aspiration-id.js') }}"></script>
<script>

</script>
@endsection