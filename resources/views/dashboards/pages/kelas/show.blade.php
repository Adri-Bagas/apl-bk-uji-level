@extends('dashboards.layout.app')

@section('main-content')
<div class="content">
        <div class="card">
          <div class="card-header">
            <h2>Anda Sedang Melihat Data Kelas : {{$kelasss->nama}}</h2>
          </div>
          <div class="card-body">
            <br>
            <p>nama : {{ $kelasss->nama}}</p>
            <br>
            
          </div>
        </div>
</div>
<table>
    <tr>
      <td><a class="btn btn-primary mt-2 ml-3" href="/kelas">KEMBALI</a></td> 
    </tr>
  </table>

@endsection