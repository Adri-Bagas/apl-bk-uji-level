@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Hasil</h5>
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
                        <label for="exampleInputEmail1" class="form-label">Hasil</label>
                        <textarea name="hasil" cols="30" rows="10" name="ket" class="form-control">{{ old('hasil') }}</textarea>
                    </div>

                    <table>
                        <tr>
                            <td><a style="margin-left: 20px," class="btn btn-warning" href="/bk/konseling">Cancel</a></td>
                            <td><button type="submit" class="btn btn-success" style="margin-left:20px">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection