@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit Jurusan</h5>
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
                <form action="{{ url('jurusan/edit', $jurus->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="mb-3" >
                      <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                      <input type="text" name="nama" class="form-control" value="{{$kelasss->nama}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Walas Id</label>
                        <select class="form-select" name="walas_id" id="walas_id">
                          @foreach($guru as $item)
                          <option value="{{$item->id}}">{{$item->user->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Walas Id</label>
                        <select class="form-select" name="walas_id" id="walas_id">
                          @foreach($guru as $item)
                          <option value="{{$item->id}}">{{$item->user->name}}</option>
                          @endforeach
                        </select>
                      </div>
                  <table>
                    <tr>
                    <td><button type="submit" class="btn btn-primary" href="">Submit</button></td>
                    <td ><a style="margin-left: 20px" class="btn btn-primary" href="/jurusan">Cancel</a></td>
                    </tr>
                  </table>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection