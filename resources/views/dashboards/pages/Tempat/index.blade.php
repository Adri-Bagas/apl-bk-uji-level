@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tempat</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('tempat/create') }}" role="button"  style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nomer</th>
                        <th class="th-sm">Tempat </th>
                        <th class="th-sm">Action</th>

                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($tempat as $tempatt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tempatt->nama }}</td>
                        
                        
                        <td> 
                             {{-- <a href="{{ url('kelas/delete', $kelasss->id) }}" class="btn btn-danger">Hapus</a> --}}

                             <div class="btn-form" style="display: flex">
                                <a href="{{ url('tempat/edit', $tempatt->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Edit</a> 
                                <form action="/tempat/delete/{{$tempatt->id}}" method="POST"
                                    onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text text-white btn-sm"
                                        style="">Hapus</button>
                                </form>
                                {{-- <a href="{{ url('jurusan/edit', $jurus->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-left: 10px">Edit</a>     --}}
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
