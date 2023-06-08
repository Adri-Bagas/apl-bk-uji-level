@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Jurusan</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('jurusan/create') }}" role="button"
                style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Tanggal buat</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jurusan as $jurus)
                    <tr>
                        <td>{{ $jurus->nama }}</td>
                        <td>{{ $jurus->created_at }}</td>
                        <td>
                            <div class="btn-form" style="display: flex">
                                <a href="{{ url('jurusan/edit', $jurus->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Edit</a> 
                                <form action="/jurusan/delete/{{$jurus->id}}" method="POST"
                                    onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text text-white btn-sm"
                                        style="">Hapus</button>
                                </form>
                                {{-- <a href="{{ url('jurusan/edit', $jurus->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-left: 10px">Edit</a>     --}}
                            </div>
                            {{-- <a href="{{ url('jurusan/delete', $jurus->id) }}" class="btn btn-danger">Hapus</a> --}}
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
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
@endsection