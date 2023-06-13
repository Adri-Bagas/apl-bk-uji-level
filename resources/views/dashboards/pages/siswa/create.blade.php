@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Siswa</h5>
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
                <form action="/siswa/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" >
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" name="name" class="form-control" placeholder=" Masukkan Nama" value="{{ old('name') }}">
                    </div>

                    <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder=" Masukkan Email" value="{{ old('email') }}">
                      </div>

                      <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukkan Password" value="*123456*" readonly>
                      </div>

                      <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" value="{{ old('no_telepon') }}">
                      </div>

                      <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Profile</label>
                        <input type="file" name="foto" class="form-control" placeholder="" value="">
                      </div>
                    
                      <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">NIPD</label>
                        <input type="text" name="nipd" class="form-control" placeholder=" Masukkan Nomor " value="{{ old('nipd') }}">
                      </div>

                      <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                        <input type="text" name="nisn" class="form-control" placeholder=" Masukkan Nomor " value="{{ old('nisn') }}">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Kelas Id</label>
                        <select class="form-select" name="kelas_id" id="kelasid">
                          @foreach($kelas as $item)
                          <option value="{{$item->id}}">{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>

                  <table>
                    <tr>
                    
                        <td ><a style="margin-left: 20px," class="btn btn-warning" href="/siswa">Cancel</a></td>
                        <td><button type="submit" class="btn btn-success" style="margin-left:20px">Submit</button></td>
                    </tr>
                  </table>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection