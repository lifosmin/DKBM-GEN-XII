@extends('cms.base.app')

@section('content')
<div class="container my-5">
    <form action="{{ route('aspirationVerification') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Resi" class="form-label">Resi Anda</label>
            <input type="text" class="form-control" id="Resi" name="Resi" value="{{ $Resi }}" disabled>
            <input type="hidden" class="form-control" id="Resi" name="Resi" value="{{ $Resi }}">
        </div>
        <div class="mb-3">
            <label for="CategorySelect" class="form-label">Kategori</label>
            <select id="CategorySelect" class="form-select" name="Kategori">
              <option @if(old('Kategori') == 'Akademik') selected @endif value="Akademik">Akademik</option>
              <option @if(old('Kategori') == 'Non-Akademik') selected @endif value="Non-Akademik">Non-Akademik</option>
              <option @if(old('Kategori') == 'Fasilitas') selected @endif value="Fasilitas">Fasilitas</option>
              <option @if(old('Kategori') == 'Kegiatan') selected @endif value="Kegiatan">Kegiatan</option>
            </select>
            <p>Nanti buat penjelasan</p>
          </div>
        <div class="mb-3">
            <label for="IsiAspirasi" class="form-label">Aspirasi Anda</label>
            <textarea class="form-control" id="IsiAspirasi" name="Isi" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection