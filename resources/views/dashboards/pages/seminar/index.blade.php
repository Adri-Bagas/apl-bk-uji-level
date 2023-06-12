@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Siswa</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('seminar/create') }}" role="button"
                style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th class="th-sm">Tanggal</th>
                        <th class="th-sm">Waktu</th>
                        <th class="th-sm">Judul</th>
                        <th class="th-sm">Penyelenggara</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seminars as $seminar)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $seminar->tanggal_seminar }}</td>
                        <td>{{ $seminar->waktu_seminar }}</td>
                        <td>{{ $seminar->judul_seminar }}</td>
                        <td>{{ $seminar->penyelenggara }}</td>
                        <td>
                            <div class="btn-form" style="display: flex">
                                <a href="{{ url('seminar/edit', $seminar->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Edit</a> 
                                <form action="seminar/delete/{{$seminar->user->id}}" method="POST"
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