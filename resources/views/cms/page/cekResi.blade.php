@extends('cms.base.app')

@section('custom-css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
    <link href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cek-resi.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>
    <div class="container main-container">
        <h1 class="text-center">Cek Resi</h1>

        @if($aspiration == null)
          <div class="alert-container d-flex justify-content-center align-items-center">
            <div class="alert alert-danger d-inline-block m-0">Aspirasi dengan ID : {{ request('Resi') }} tidak terdaftar dalam database!</div>
          </div>
        @endif
        <div class="container d-flex justify-content-center align-items-center mt-4">
            <div class="form-container col-md-6 col-12 rounded">
                <div class="form-group mb-3 position-relative">
                  <form action="{{ route('cekResi') }}">
                    @csrf
                    <input type="text" class="form-control rounded-pill p-3" placeholder="Input nomor resi..." name="Resi">
                    <button class="search-button position-absolute" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL RESI --}}
    <!-- Modal -->
    @if ($aspiration)
        <div class="modal fade" id="resi-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="position-relative modal-body p-5 py-5 d-flex flex-column justify-content-evenly align-items-center gap-3">
                        <button type="button" data-bs-dismiss="modal" class="btn-close modal-close-button position-absolute" aria-label="Close"></button>

                        <div class="resi-item w-100">
                            <div class="resi-description fs-5 fw-bold mb-2">RESI</div>

                            <div class="resi-value rounded p-3">
                                {{ $aspiration->Resi }}
                            </div>
                        </div>

                        <div class="resi-item w-100">
                            <div class="resi-description fs-5 fw-bold mb-2">TANGGAL</div>

                            <div class="resi-value rounded p-3">
                                {{ $aspiration->created_at }}
                            </div>
                        </div>
                        <div class="resi-item w-100">
                            <div class="resi-description fs-5 fw-bold mb-2">STATUS</div>

                            <div class="resi-value rounded p-3">
                                {{ $aspiration->Status }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('custom-js')
    @if ($aspiration)
        <script>
            $(document).ready(function() {
                $('#resi-modal').modal('show');
            });
        </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
@endsection

{{-- OLD SCRIPT --}}
{{-- <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
    <script>
        @foreach ($datas as $data)
        // Get the modal
        var modal{{$data->id}} = document.getElementById("detailData{{$data->id}}");
    
        // Get the button that opens the modal
        var btn{{$data->id}} = document.getElementById("detail{{$data->id}}");
    
        // Get the <span> element that closes the modal
        var span{{$data->id}} = document.getElementsByClassName("data-close{{$data->id}}")[0];
    
        // When the user clicks on the button, open the modal
        btn{{$data->id}}.onclick = function() {
            modal{{$data->id}}.style.display = "block";
        }
    
        // When the user clicks on <span> (x), close the modal
        span{{$data->id}}.onclick = function() {
            modal{{$data->id}}.style.display = "none";
        }
    
        //When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal{{$data->id}}) {
                modal{{$data->id}}.style.display = "none";
            }
        }
        @endforeach
    </script> --}}
{{-- OLD DATA TABLE --}}
{{-- <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Resi</th>
                    <th>Status</th>
                    <th>Tanggal Masuk</th>
                    @if (Auth::guard('users')->user())
                        <th>Action</th>
                        {{-- Button detail buat tau isi detailnya
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->Resi }}</td>
                    <td>{{ $data->Status }}</td>
                    <td>{{ $data->created_at }}</td>
                    @if (Auth::guard('users')->user())
                        <td><button class="btn btn-primary" id="detail{{ $data->id }}">Detail</button></td>
                        {{-- Button detail buat tau isi detailnya --}}

{{-- Isi modal
                        <div id="detailData{{ $data->id }}" class="data-modal">
                            <div class="data-modal-content">
                                <div class="data-modal-header">
                                    <span class="data-close{{$data->id}} data-close">&times;</span>
                                    <h2>
                                        Aspirasi {{ $data->Resi }} 
                                    </h2>
                                    <p>Kategori: {{ $data->Kategori }}</p>
                                    <p>Status  : {{ $data->Status }}</p>
                                </div>
                                <p class="header-text">Isi Aspirasi</p>
                                <p class="text-content">{{ $data->Isi }}</p>
                        </div>
                        {{-- End of Isi Modal

                    @endif
                </tr>
                @endforeach
            </tbody>
        </table> --}}
