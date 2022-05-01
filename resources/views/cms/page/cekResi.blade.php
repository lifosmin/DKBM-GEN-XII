@extends('cms.base.app')

@section('custom-css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
    <link href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Cek Resi</h1>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Resi</th>
                    <th>Status</th>
                    <th>Tanggal Masuk</th>
                    @if(Auth::guard('users')->user())
                        <th>Action</th>
                        {{-- Button detail buat tau isi detailnya --}}
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td>{{ $data->Resi }}</td>
                    <td>{{ $data->Status }}</td>
                    <td>{{ $data->created_at }}</td>
                    @if(Auth::guard('users')->user())
                        <td><button class="btn btn-primary">Detail</button></td>
                        {{-- Button detail buat tau isi detailnya --}}
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('custom-js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
@endsection