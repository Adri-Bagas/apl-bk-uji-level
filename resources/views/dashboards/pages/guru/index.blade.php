@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Guru</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('guru/create') }}" role="button"
                style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nomer</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">No Telepon</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gurus as $guru)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ url('guru', $guru->id) }}" style="color: black;">{{ $guru->user->name }}</a></td>
                        <td>{{ $guru->user->email }}</td>
                        <td>{{ $guru->no_telepon }}</td>
                        <td>
                            <div class="btn-form" style="display: flex">
                                <a href="{{ url('guru/edit', $guru->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Edit</a> 
                                <form action="/guru/delete/{{$guru->user->id}}" method="POST"
                                    onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text text-white btn-sm"
                                        style="">Hapus</button>
                                </form>
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