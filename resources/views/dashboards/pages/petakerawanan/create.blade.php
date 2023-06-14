@extends('dashboards.layout.app')

@section('main-content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form </h5>
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
                        <label for="exampleInputEmail1" class="form-label">jenis kerawanan</label>
                        <input type="text" class="form-control" value="{{ $siswa->user->name }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">jenis kerawanan</label>
                        <select name="jeniskerawanan_id[]" id="tom-select-siswa" multiple placeholder="Jenis Kerawanan">
                            @foreach($jeniskerawanan as $item)
                                <option value="{{ $item->id }}" {{ in_array($item->id, $arrayData) ? 'selected' : ''}}>{{$item->jenis_kerawanan}}</option>
                            @endforeach
                        </select>
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
new TomSelect('#tom-select-siswa', {
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