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
                <form action="/siswa/create" method="POST">
                    @csrf
                    <div class="mb-3" >
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder=" Masukkan Nama">
                    </div>

                    <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder=" Masukkan Email">
                      </div>
                    
                      <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Nipd</label>
                        <input type="text" name="Nipd" class="form-control" placeholder=" Masukkan Nomor ">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Kelas Id</label>
                        <select class="form-select" name="kelas_id" id="kelasid">
                          @foreach($kelas as $item)
                          <option value="{{$item->kelas->id}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      



                  <table>
                    <tr>
                    
                        <td ><a style="margin-left: 20px," class="btn btn-warning" href="/jurusan">Cancel</a></td>
                        <td><button type="submit" class="btn btn-success" style="margin-left:20px">Submit</button></td>
                    </tr>
                  </table>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection