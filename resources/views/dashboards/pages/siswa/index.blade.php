@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Siswa</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{route('create-siswa')}}" role="button"
                style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nomer</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Nipd</th>
                        <th class="th-sm">Kelas</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ url('siswa', $siswa->id) }}" style="color: black;">{{ $siswa->user->name }}</a></td>
                        <td>{{ $siswa->user->email }}</td>
                        <td>{{ $siswa->nipd }}</td>
                        <td>{{ $siswa->kelas->nama}}</td>
                        <td>
                            <div class="btn-form" style="display: flex">
                                <a href="{{ url('siswa/edit', $siswa->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Edit</a> 
                                <form action="siswa/delete/{{$siswa->user->id}}" method="POST"
                                    onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text text-white btn-sm"
                                        style="">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>
</div>
@endsection

@section('scriptJS')
<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
@endsection