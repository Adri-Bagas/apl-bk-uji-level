@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">{{ $siswa->user->name }} @foreach($siswa->user->getRoleNames()->toArray() as $item) {{ " | $item" }} @endforeach</h5>
            <hr>

            <div class="container-datas" style="display: flex;">
                <img src="{{ $siswa->fotos()->first() ? asset('storage/'.$siswa->fotos()->first()->img_location) : ''}}" alt="" style="width: 300px">
                <div style="width: 70%;">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder=" Masukkan Nama" value="{{$siswa->user->name}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="{{$siswa->user->email}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="*123456*" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" value="{{ $siswa->no_telepon}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nisn</label>
                        <input type="text" name="nisn" class="form-control" placeholder="" value="{{ $siswa->nisn}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nipd</label>
                        <input type="text" name="nipd" class="form-control" placeholder="Nipd" value="{{ $siswa->nipd}}" readonly>
                    </div>

                    
                </div>
            </div>
            <a class="btn btn-warning btn-icon-text text-white " href="{{ route('siswa') }}" role="button" style="margin-left:520px; display:inline-block ">Back</a>

            <a class="btn btn-primary btn-icon-text text-white " href="{{ url('siswa/edit', $siswa->id) }}" role="button" style="margin-left:20px; display:inline-block ">Edit Data</a>

            <a class="btn btn-danger btn-icon-text text-white " href="{{ route('siswa') }}" role="button" style="margin-left:20px; display:inline-block ">Peta Kerawanan</a>
        </div>
    </div>
</div>
@endsection

@section('scriptJS')

@endsection