@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">{{ $layanan->jenis_layanan }} </h5>
            <hr>

            <div class="container-datas" style="display: flex;">
                <img src="{{ $layanan->fotos()->first() ? asset('storage/'.$layanan->fotos()->first()->img_location) : ''}}" alt="" style="width: 300px">
                <div style="width: 70%;">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                        <textarea name="keterangan" cols="30" rows="10" name="keterangan" class="form-control" readonly>{{ $layanan->keterangan }} </textarea> 
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Layanan</label>
                        <input type="text" name="jenis_layanan" class="form-control" placeholder="" value="{{ $layanan->jenis_layanan }}" readonly>
                    </div>

                    <label for="exampleInputEmail1" class="form-label">Atribut Tambahan</label><br>
                        <input type="checkbox" name="isMultiChild" {{ $layanan->isMultiChild == 1 ? 'checked' : ''}}> Pilih Banyak Siswa <br/>
                        <input type="checkbox" name="isAllStudent" {{ $layanan->isAllStudent == 1 ? 'checked' : ''}}>  Seluruh Siswa <br/>
                        <input type="checkbox" name="isAvailableToSiswa" {{ $layanan->isAvailableToSiswa == 1 ? 'checked' : ''}}>  Hanya Untuk Siswa <br/>
                        <input type="checkbox" name="isAvailableToGuru" {{ $layanan->isAvailableToGuru == 1 ? 'checked' : ''}}>  Hanya Untuk Guru <br/>
                        <input type="checkbox" name="isCareerOriented" {{ $layanan->isCareerOriented == 1 ? 'checked' : ''}}>   Bimbingan Mengenai Karir<br/>

                    
                    
                </div>
            </div>
            <a class="btn btn-warning btn-icon-text text-white " href="{{ route('layanan') }}" role="button" style="margin-left:700px; display:inline-block ">Back</a>

            <a class="btn btn-primary btn-icon-text text-white " href="{{ url('layanan/edit', $layanan->id) }}" role="button" style="margin-left:20px; display:inline-block ">Edit Data</a>

            
        </div>
    </div>
</div>
@endsection

@section('scriptJS')

@endsection