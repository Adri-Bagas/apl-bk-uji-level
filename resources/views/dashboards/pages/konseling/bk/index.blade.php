@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data Konseling | {{ isset($LayananBK) ? $LayananBK->jenis_layanan : '' }}</h5>
            @if(isset($LayananBK))
                @if($LayananBK->isAvailableToSiswa == 1)
                @else
                <a class="btn btn-primary btn-icon-text text-white btn-sm" href="{{ url('/bk/konseling/input', $LayananBK->jenis_layanan) }}" role="button"
                    style="margin-bottom:20px; display:inline-block ">Buat Perjanjian</a>
                @endif
            @else
            @endif
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th class="th-sm">Jenis Layanan</th>
                        <th class="th-sm">Tanggal</th>
                        <th class="th-sm">Waktu</th>
                        <th class="th-sm">Tempat</th>
                        <th class="th-sm">Siswa</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($KonsulingBKs as $KonsulingBK)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $KonsulingBK->layananBK->jenis_layanan }}</td>
                        <td>{{ $KonsulingBK->tanggal_konseling }}</td>
                        <td>{{ $KonsulingBK->waktu_konseling }}</td>
                        <td>{{ $KonsulingBK->tempat->nama }}</td>
                        <td>
                            @if($KonsulingBK->siswas->count() == 1)
                            {{ $KonsulingBK->siswas->first()->user->name }}
                            @else
                            <ul>
                                @foreach($KonsulingBK->siswas as $siswa)
                                <li>{{ $siswa->user->name }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </td>
                        <td>
                            {{ $KonsulingBK->status }}
                        </td>
                        <td>
                            @if($KonsulingBK->status == "PENDING")
                            @hasrole('bk')
                            <div class="btn-form" style="display: flex">
                                <form action="{{ url('bk/konseling/accept', $KonsulingBK->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-warning  btn-sm" style="display: inline-block; margin-right: 10px">Accept</button> 
                                </form>

                                <a class="btn btn-danger btn-icon-text text-white btn-sm" href="{{ url('/bk/konseling/input/reschedule', $KonsulingBK->id) }}">Reschedule</a>
                            </div>
                            @endhasrole
                            @elseif($KonsulingBK->status == "DONE")
                            <a class="btn btn-primary  btn-sm" style="display: inline-block; margin-right: 10px" href="{{ url('/bk/konseling/detail', $KonsulingBK->id) }}">Show</a> 
                            @else
                            @hasrole('bk')
                            <a class="btn btn-primary  btn-sm" style="display: inline-block; margin-right: 10px" href="{{ url('/bk/konseling/catat', $KonsulingBK->id) }}">Tulis Hasil</a>
                            @endhasrole
                            @endif
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