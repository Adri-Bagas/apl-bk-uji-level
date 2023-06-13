@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form {{ $jenisLayanan->jenis_layanan }} </h5>
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
                        <label for="exampleInputEmail1" class="form-label">Siswa</label>
                        <select name="siswas_id[]" id="tom-select-siswa" {{ $jenisLayanan->isMultiChild == 1 ? 'multiple' : ''}} placeholder="Cari Nama Siswa">
                            @foreach($siswas as $siswa)
                                <option value="{{ $siswa->id }}">{{$siswa->user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal_konseling" class="form-control" placeholder="" value="{{ old('tanggal_konseling') }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu</label>
                        <input type="time" name="waktu_konseling" class="form-control" placeholder="Masukkan Waktu">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat</label>
                        <select name="tempat_id" id="tom-select-tempat" placeholder="Lokasi Pertemuan...">
                            @foreach($tempats as $tempat)
                                <option value="{{ $tempat->id }}">{{$tempat->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    @if($jenisLayanan->isCareerOriented == 1)
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Karir</label>
                        <select name="karir" id="tom-select-karir" placeholder="Karir Selanjutnya...">
                            <option value="KERJA">Kerja</option>
                            <option value="KULIAH">Kuliah</option>
                            <option value="WIRAUSAHA">Wirausaha</option>
                        </select>
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                        <textarea name="ket" cols="30" rows="10" name="ket" class="form-control">{{ old('ket') }}</textarea>
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

@section('scriptJS')
<script>
    new TomSelect('#tom-select-siswa',{
	create: true,
	render:{
		option: function(data) {

			const div = document.createElement('div');
			div.className = 'd-flex align-items-center';

			const span = document.createElement('span');
			span.className = 'flex-grow-1';
			span.innerText = data.text;
			div.append(span);

			return div;
		},
	}
});

new TomSelect('#tom-select-tempat', {
    create: true,
	render:{
		option: function(data) {

			const div = document.createElement('div');
			div.className = 'd-flex align-items-center';

			const span = document.createElement('span');
			span.className = 'flex-grow-1';
			span.innerText = data.text;
			div.append(span);

			return div;
		},
	}
});

new TomSelect('#tom-select-karir', {
    create: true,
	render:{
		option: function(data) {

			const div = document.createElement('div');
			div.className = 'd-flex align-items-center';

			const span = document.createElement('span');
			span.className = 'flex-grow-1';
			span.innerText = data.text;
			div.append(span);

			return div;
		},
	}
});
</script>
@endsection