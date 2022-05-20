@extends('admin.base.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Data Aspirasi Pending</h1>

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
                @foreach($items as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->Resi }}</td>
                        <td>{{ $item->Kategori }}</td>
                        <td>{{ $item->Status }}</td>
                        <td><button id="moreData{{$item->id}}" class="btn btn-primary">View More</button></td>
                        {{-- Modal Buat nampilin Isi + kasi solusi sekalian ubah status pake button aja, abis itu email solusi ke email orang nya --}}
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

    {{-- Modal --}}
    @foreach($items as $item)
    <div id="moreDataModal{{ $item->id }}" class="data-modal">
        <div class="data-modal-content">
            <div class="data-modal-header">
                <span class="data-close{{$item->id}} data-close">&times;</span>
                <h2>
                    Aspirasi {{ $item->Resi }}
                </h2>
                <p>Kategori: {{ $item->Kategori }}</p>
                <p>Status  : {{ $item->Status }}</p>
            </div>
            <p class="header-text">Isi Aspirasi</p>
            <p>{{ $item->Isi }}</p>
            <div class="container">
                <form action="{{ route('updateAspiration') }}" method="POST">
                    @csrf
                    <input type="hidden" name="Resi" value="{{ $item->Resi }}">
                    <input type="hidden" name="userNama" value="{{ $item->user_send->Nama }}">
                    <input type="hidden" name="userEmail" value="{{ $item->user_send->Email }}">
                    <input type="hidden" name="Isi" value="{{ $item->Isi }}">

                    <label for="status">Status</label>
                    <select class="form-select" aria-label="Default select example" name="Status" id="Status">
                        <option @if($item->Status == "Pending") selected @endif value="Pending">Pending</option>
                        <option @if($item->Status == "On Progress") selected @endif value="On Progress">On Progress</option>
                        <option @if($item->Status == "Finished") selected @endif value="Finished">Finished</option>
                    </select>
    
                    <label for="Solusi">Solusi</label>
                    <textarea placeholder="Masukkan Solusi dari isi Aspirasi..." class="form-control @error('Solusi') is-invalid @enderror" name="Solusi" rows="3">{{ $item->Solusi }}</textarea>
                
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('custom-js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        @foreach($items as $item)
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
    </script>
@endsection