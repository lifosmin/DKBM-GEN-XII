@extends('cms.base.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/aspiration.css') }}">
    <link rel="stylesheet" href="{{ asset('css/validation.css') }}">
@endsection

@section('content')
<div class="container">
    <form action="{{ route('aspirationVerification') }}" method="POST" class="form-margin" id="form-aspirasi">
        @csrf
        <h1 class="text-center">Aspiration Form</h1>
        <div class="mb-3">
            <label for="Resi" class="form-label">Your Resi</label>
            <input type="text" class="form-control @error('Resi') is-invalid @enderror" id="Resi" name="Resi" value="{{ $Resi }}" disabled>
            <input type="hidden" class="form-control" id="Resi" name="Resi" value="{{ $Resi }}">
        </div>
        <div class="mb-3">
            <label for="CategorySelect" class="form-label">Category</label>
            <select id="CategorySelect" class="form-select @error('Kategori') is-invalid @enderror" name="Kategori">
              <option @if(old('Kategori') == 'Akademik') selected @endif value="Akademik">Academic</option>
              <option @if(old('Kategori') == 'Non-Akademik') selected @endif value="Non-Akademik">Non-Academic</option>
              <option @if(old('Kategori') == 'Fasilitas') selected @endif value="Fasilitas">Facility</option>
              <option @if(old('Kategori') == 'Kegiatan') selected @endif value="Kegiatan">Activity</option>
            </select>
            <div class="mx-2">
                <small id="description">Academic Aspirations are aspirations that cover all activities related to teaching and learning activities.</small>
            </div>
            @error('Kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="IsiAspirasi" class="form-label">Your Aspiration</label>
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
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/validation/aspiration.js') }}"></script>
<script>

</script>
@endsection