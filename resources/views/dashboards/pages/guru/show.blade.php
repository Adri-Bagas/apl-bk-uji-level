@extends('dashboards.layout.app')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">{{ $guru->user->name }} @foreach($guru->user->getRoleNames()->toArray() as $item) {{ " | $item" }} @endforeach</h5>
            <hr>

            <div class="container-datas" style="display: flex;">
                <img src="{{ $guru->fotos()->first() ? asset('storage/'.$guru->fotos()->first()->img_location) : ''}}" alt="" style="width: 300px">
                <div style="width: 70%;">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder=" Masukkan Nama" value="{{$guru->user->name}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="{{$guru->user->email}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="*123456*" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" value="{{ $guru->no_telepon}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Roles</label>
                        <ul style="list-style-type: circle;">
                            @foreach($roles as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <a class="btn btn-warning btn-icon-text text-white " href="{{ route('guru') }}" role="button" style="margin-left:700px; display:inline-block ">Back</a>

            <a class="btn btn-primary btn-icon-text text-white " href="{{ url('guru/edit', $guru->id) }}" role="button" style="margin-left:20px; display:inline-block ">Edit Data</a>
        </div>
    </div>
</div>
@endsection

@section('scriptJS')

@endsection