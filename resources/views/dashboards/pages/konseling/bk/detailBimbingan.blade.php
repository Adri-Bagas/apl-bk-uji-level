@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Detail Bimbingan</h5>
            <div class="content">
                @if($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Siswa</label>
                        <ul>
                            @foreach($Konsuling->siswas as $siswa)
                                <li>{{ $siswa->user->name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal_konseling" class="form-control" placeholder="" value="{{ $Konsuling->tanggal_konseling }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu</label>
                        <input type="time" name="waktu_konseling" class="form-control" placeholder="Masukkan Waktu" value="{{ $Konsuling->waktu_konseling }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat</label>
                        <input type="text" class="form-control" value="{{ $Konsuling->tempat->nama }}" readonly>
                    </div>

                    @if($jenisLayanan->isCareerOriented == 1)
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Karir</label>
                        <input type="text" class="form-control" value="{{ $Konsuling->option }}" readonly>
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                        <textarea name="ket" cols="30" rows="10" name="ket" class="form-control" readonly>{{ $Konsuling->ket }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Hasil</label>
                        <textarea name="ket" cols="30" rows="10" name="ket" class="form-control" readonly>{{ $Konsuling->hasil_konseling }}</textarea>
                    </div>

                    <table>
                        <tr>
                            <td><a style="margin-left: 20px," class="btn btn-warning" href="/bk/konseling">Back</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

