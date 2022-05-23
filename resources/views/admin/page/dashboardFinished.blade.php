@extends('admin.base.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Data Aspirasi Finished</h1>

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
                <p>{{ $item->user_send->Nama }} - {{ $item->user_send->NIM }}</p>
                <p>Email    : {{ $item->user_send->Email }}</p>
                <p>Jurusan  : {{ $item->user_send->Jurusan }}</p>
                <p>Nomor WA : {{ $item->user_send->nomorWA }}</p>
                <p>ID Line  : {{ $item->user_send->ID_Line }}</p>
                <hr/>
                <p>Kategori: {{ $item->Kategori }}</p>
                <p>Status  : {{ $item->Status }}</p>
            </div>
            <p class="header-text">Isi Aspirasi</p>
            <p>{{ $item->Isi }}</p>
            <p class="header-text">Solusi Aspirasi</p>
            <p>{{ $item->Solusi }}</p>
        </div>
    </div>
    @endforeach
    {{-- END OF MODAL --}}

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