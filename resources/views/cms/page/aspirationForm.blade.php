@extends('cms.base.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/aspiration.css') }}">
@endsection

@section('content')
<div class="container">
    <form action="{{ route('aspirationVerification') }}" method="POST" class="form-margin" id="form-aspirasi">
        @csrf
        <h1 class="text-center">Form Aspirasi</h1>
        <div class="mb-3">
            <label for="Resi" class="form-label">Resi Anda</label>
            <input type="text" class="form-control @error('Resi') is-invalid @enderror" id="Resi" name="Resi" value="{{ $Resi }}" disabled>
            <input type="hidden" class="form-control" id="Resi" name="Resi" value="{{ $Resi }}">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="{{ asset('js/aspiration.js') }}"></script>
<script>

</script>
@endsection