@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">layanan</h5>
            <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('layanan/create') }}" role="button"
                style="margin-bottom:20px; display:inline-block ">Tambah Data</a>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nomer</th>
                        <th class="th-sm">Jenis Layanan</th>
                        <th class="th-sm">Banyak Murid</th>
                        <th class="th-sm">Seluruh Murid</th>
                        <th class="th-sm">Hanya Siswa</th>
                        <th class="th-sm">Hanya Guru</th>
                        <th class="th-sm">Bimbingan Karir</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($layanan as $layan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- <td>{{ $layan->keterangan }}</td> --}}
                        <td><a href="{{ url('layanan', $layan->id) }}" style="color: black;">{{ $layan->jenis_layanan }}</a></td>
                        <td>{{ $layan->isMultiChild }}</td>
                        <td>{{ $layan->isAllStudent }}</td>
                        <td>{{ $layan->isAvailableToSiswa }}</td>
                        <td>{{ $layan->isAvailableToGuru  }}</td>
                        <td>{{ $layan->isCareerOriented}}</td>
                        
                        <td>
                            <div class="btn-form" style="display: flex">
                                <a href="{{ url('layanan/edit', $layan->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Edit</a> 
                                <form action="/layanan/delete/{{$layan->id}}" method="POST"
                                    onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text text-white btn-sm"
                                        style="">Hapus</button>
                                </form>
                                
                            </div>
                            {{-- <a href="{{ url('jurusan/edit', $jurus->id) }}" class="btn btn-warning  btn-sm" style="display: inline-block; margin-left: 10px">Edit</a>     --}}
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