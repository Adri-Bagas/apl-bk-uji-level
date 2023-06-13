@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Siswa</h5>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nomer</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Nipd</th>
                        <th class="th-sm">Kelas</th>
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