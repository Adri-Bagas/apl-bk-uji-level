@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Kelas</h5>
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
                <form action="/kelas/create" method="POST">
                    @csrf
                  <div class="mb-3" >
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control">
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
                    <label class="form-label">BK Id</label>
                    <select class="form-select" name="bk_id" id="bk_id">
                      @foreach($guru as $item)
                      <option value="{{$item->id}}">{{$item->user->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <table>
                    <tr>
                    <td><button type="submit" class="btn btn-primary">Submit</button></td>
                    <td ><a style="margin-left: 20px" class="btn btn-primary" href="/kelas">Cancel</a></td>
                    </tr>
                  </table>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection