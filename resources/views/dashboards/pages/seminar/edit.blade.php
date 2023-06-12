@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Seminar</h5>
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
                <form action="{{ url('seminar', $seminar->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                        <input type="text" name="judul_seminar" class="form-control" placeholder=" Masukkan Judul Seminar" value="{{ $seminar->judul_seminar }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penyelenggara</label>
                        <input type="text" name="penyelenggara" class="form-control" placeholder="Masukkan Nama Penyelenggara" value="{{ $seminar->penyelenggara }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal_seminar" class="form-control" placeholder="Masukkan Tanggal Seminar" value="{{ $seminar->tanggal_seminar }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu</label>
                        <input type="time" name="waktu_seminar" class="form-control" placeholder="Masukkan Waktu Seminar" value="{{ $seminar->waktu_seminar }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Img</label>
                        <input type="file" name="foto[]" class="form-control" placeholder="" value="" multiple>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                        <textarea name="keterangan" cols="30" rows="10" name="keterangan" class="form-control">{{ $seminar->keterangan }}</textarea>
                    </div>

                    <table>
                        <tr>
                            <td><a style="margin-left: 20px," class="btn btn-warning" href="/guru">Cancel</a></td>
                            <td><button type="submit" class="btn btn-success" style="margin-left:20px">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection