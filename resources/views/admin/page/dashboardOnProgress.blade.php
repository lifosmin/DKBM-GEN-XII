@extends('admin.base.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Data Aspirasi On Progress</h1>

        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Resi</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->Resi }}</td>
                        <td>{{ $item->Kategori }}</td>
                        <td>
                          <div
                                class="resi-status-{{ Str::lower(implode('-', explode(' ', $item->Status))) }} d-flex justify-content-center align-items-center">
                                {{ Str::upper($item->Status) }}
                            </div>
                        </td>
                        {{-- <td><button id="moreData{{ $item->id }}" class="btn btn-primary">View More</button></td> --}}
                        {{-- Modal Buat nampilin Isi + kasi solusi sekalian ubah status pake button aja, abis itu email solusi ke email orang nya --}}
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#moreDataModal{{ $item->id }}">
                                View More
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Resi</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>

    {{-- MODAL  --}}
    @foreach ($items as $item)
        <div id="moreDataModal{{ $item->id }}" class="data-modal">
            <div class="data-modal-content">
                <div class="data-modal-header">
                    <span class="data-close" data-dismiss="modal">&times;</span>
                    <h2>
                        Aspirasi {{ $item->Resi }}
                    </h2>
                    <p>{{ $item->user_send->Nama }} - {{ $item->user_send->NIM }}</p>
                    <p>Email : {{ $item->user_send->Email }}</p>
                    <p>Jurusan : {{ $item->user_send->Jurusan }}</p>
                    <p>Nomor WA : {{ $item->user_send->nomorWA }}</p>
                    <p>ID Line : {{ $item->user_send->ID_Line }}</p>
                    <hr />
                    <p>Kategori: {{ $item->Kategori }}</p>
                    <p>Status : {{ $item->Status }}</p>
                </div>
                <p class="header-text">Isi Aspirasi</p>
                <p>{{ $item->Isi }}</p>

                <div class="container">
                    <form action="{{ route('updateProgress') }}" method="POST" class="formAspirasi">
                        @csrf
                        <input type="hidden" name="Resi" value="{{ $item->Resi }}">
                        <input type="hidden" name="userNama" value="{{ $item->user_send->Nama }}">
                        <input type="hidden" name="userEmail" value="{{ $item->user_send->Email }}">
                        <input type="hidden" name="Isi" value="{{ $item->Isi }}">

                        <label for="status">Status</label>
                        <select class="form-select" aria-label="Default select example" name="Status" id="Status">
                            <option @if ($item->Status == 'Pending') selected @endif value="Pending">Pending</option>
                            <option @if ($item->Status == 'On Progress') selected @endif value="On Progress">On Progress
                            </option>
                            <option @if ($item->Status == 'Finished') selected @endif value="Finished">Finished</option>
                        </select>

                        <label for="Solusi">Solusi</label>
                        <textarea placeholder="Masukkan Solusi dari isi Aspirasi..." class="form-control @error('Solusi') is-invalid @enderror"
                            name="Solusi" id="solusi" rows="3">{{ $item->Solusi }}</textarea>

                        <a href="#" class="btn button-submit text-dark w-100 modal-submit">Submit</a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('custom-js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/admin/submitNotice.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    {{-- <script>
        @foreach ($items as $item)
        // Get the modal
        var modal{{$item->id}} = document.getElementById("moreDataModal{{$item->id}}");
    
        // Get the button that opens the modal
        var btn{{$item->id}} = document.getElementById("moreData{{$item->id}}");
    
        // Get the <span> element that closes the modal
        var span{{$item->id}} = document.getElementsByClassName("data-close{{$item->id}}")[0];
    
        // When the user clicks on the button, open the modal
        btn{{$item->id}}.onclick = function() {
            modal{{$item->id}}.style.display = "block";
        }
    
        // When the user clicks on <span> (x), close the modal
        span{{$item->id}}.onclick = function() {
            modal{{$item->id}}.style.display = "none";
        }
    
        //When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal{{$item->id}}) {
                modal{{$item->id}}.style.display = "none";
            }
        }
        @endforeach
    </script> --}}
@endsection
