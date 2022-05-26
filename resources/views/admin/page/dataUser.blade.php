@extends('admin.base.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/dataUser.css') }}">
@endsection

@section('content')
<div class="container">
    <h1 class="text-center">Data User Web DKBM</h1>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Nomor WA</th>
                <th>ID Line</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($items as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->Nama }}</td>
                    <td>{{ $item->Email }}</td>
                    <td>{{ $item->NIM }}</td>
                    <td>{{ $item->Jurusan }}</td>
                    <td>{{ $item->nomorWA }}</td>
                    <td>{{ $item->ID_Line }}</td>
                    <td>
                        <button id="edit{{$item->id}}" class="btn btn-primary">Edit User</button>
                        <form action="/admin/dashboard-delete-user/{{ $item->id }}" method="GET" class="deleteUser{{ $item->id }}">
                            @csrf
                            <a href="#" class="btn button-delete text-dark w-100" id="{{ $item->id }}">Delete User</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Nomor WA</th>
                <th>ID Line</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

{{-- Modal --}}
@foreach($items as $item)
<div id="editDataModal{{ $item->id }}" class="data-modal">
    <div class="data-modal-content">
        <div class="data-modal-header">
            <span class="data-close{{$item->id}} data-close">&times;</span>
            <h2>
                Edit Data
            </h2>
            <p>{{ $item->Nama }}</p>
            <p>{{ $item->NIM }}</p>
        </div>
        <div class="container">
            <form action="{{ route('editUser') }}" method="POST" class="formEditUser">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">

                <label for="Nama">Nama</label>
                <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $item->Nama }}">

                <label for="Email">Email</label>
                <input type="email" name="Email" class="form-control" id="Email" value="{{ $item->Email }}">

                <label for="NIM">NIM</label>
                <input type="text" name="NIM" class="form-control" id="NIM" value="{{ $item->NIM }}">

                <label for="Jurusan">Jurusan</label>
                <select class="form-select form-select-md" name="Jurusan">
                    <option @if($item->Jurusan != 'Informatika') selected @endif value="Informatika">Informatika</option>
                    <option @if($item->Jurusan === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                    <option @if($item->Jurusan === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                    <option @if($item->Jurusan === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                    <option @if($item->Jurusan === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                    <option @if($item->Jurusan === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                    <option @if($item->Jurusan === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                    <option @if($item->Jurusan === "Perhotelan") selected @endif value="Perhotelan">Perhotelan</option>
                    <option @if($item->Jurusan === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                    <option @if($item->Jurusan === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                    <option @if($item->Jurusan === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option @if($item->Jurusan === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                    <option @if($item->Jurusan === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
                </select>

                <label for="nomorWA">Nomor WhatsApp</label>
                <input type="text" name="nomorWA" class="form-control" id="nomorWA" value="{{ $item->nomorWA }}">

                <label for="ID_Line">ID Line</label>
                <input type="text" name="ID_Line" class="form-control" id="ID_Line" value="{{ $item->ID_Line }}">

                <label for="password">Change Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                <div class="text-start justify-content-start mt-2">
                    <input type="checkbox" id="showPassword"> Show Password
                </div>

                <a href="#" class="btn button-submit text-dark w-100 modal-submit">Submit</a>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('custom-js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/admin/editNotice.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    @foreach($items as $item)
    // Get the modal
    var modal{{$item->id}} = document.getElementById("editDataModal{{$item->id}}");

    // Get the button that opens the modal
    var btn{{$item->id}} = document.getElementById("edit{{$item->id}}");

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
<script>
    $(document).ready(function(){
      $('#showPassword').on('change', function(){
        $('#password').attr('type',$('#showPassword').prop('checked')==true?"text":"password"); 
      });
    });
</script>
@endsection