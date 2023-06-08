@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Kelas</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('kelas/create') }}" role="button"  style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Walas</th>
                        <th class="th-sm">Bk</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $kelasss)
                    <tr>
                        <td>{{ $kelasss->nama }}</td>
                        <td>{{ $kelasss->walas->user->name }}</td>
                        <td>{{ $kelasss->bk->user->name }}</td>
                        
                        <td> <a href="{{ url('kelas/edit', $kelasss->id) }}" class="btn btn-warning">Edit</a>
                             <a href="{{ url('kelas/show', $kelasss->id) }}" class="btn btn-dark">Detail </a>
                             <a href="{{ url('kelas/delete', $kelasss->id) }}" class="btn btn-danger">Hapus</a>
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