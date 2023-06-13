@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Jurusan</h5>
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
                <form action="/layanan/create" method="POST" enctype="multipart/form-data">
                    @csrf



                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                        <textarea name="keterangan" cols="30" rows="10" name="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
                    </div>


                    <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Gambar</label>
                        <input type="file" name="foto" class="form-control" placeholder="" value="">
                      </div>


              
                  <div class="mb-3" >
                      <label for="exampleInputEmail1" class="form-label">Nama Layanan</label>
                      <input type="text" name="jenis_layanan" class="form-control" placeholder=" Masukan Layanan">
                    </div>

                    <div class="mb-3" >
                        <label for="exampleInputEmail1" class="form-label">Atribut Tambahan</label><br>
                        <input type="checkbox" name="isMultiChild" > Pilih Banyak Siswa <br/>
                        <input type="checkbox" name="isAllStudent" > Seluruh Siswa <br/>
                        <input type="checkbox" name="isAvailableToSiswa" > Hanya Untuk Siswa <br/>
                        <input type="checkbox" name="isAvailableToGuru" > Hanya Untuk Guru <br/>
                        <input type="checkbox" name="isCareerOriented" > Bimbingan Mengenai Karir<br/>
                        
                        
                      </div>



        
                  <table>
                    <tr>
                    
                        <td ><a style="margin-left: 20px," class="btn btn-warning" href="/layanan">Cancel</a></td>
                        <td><button type="submit" class="btn btn-success" style="margin-left:20px">Submit</button></td>
                    </tr>
                  </table>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection