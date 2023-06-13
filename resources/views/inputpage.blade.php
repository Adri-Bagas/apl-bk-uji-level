<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konseling SMK Taruna Bhakti</title>
    <link rel="stylesheet" href="{{asset('/')}}css/inputpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">

    {{-- swiper css --}}
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body style="background-color: #E8E8E8">
    {{-- navbar --}}
    <header>
        <img class="logo" src="{{asset('assets/Logo-AppBk.png')}}" alt="Logo">
        <h1>Starbhak.Konseling</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="/landingpage">Home</a></li>
                <li><a href="/landingpage#about">About</a></li>
                <li><a href="/jadwalkonseling#event">Artikel</a></li>
            </ul>
        </nav>
        @if (auth()->user())
            <button class="button-nav"><a href="/jadwalkonseling">Profile</a></button>
            <form action="logout" method="POST">
                @csrf
                <button class="button-logout" style="color: white; font-weight:bold">Log Out</button>
            </form>
            @else
            <button class="button-nav"><a href="/login">Login</a></button>
        @endif
    </header>

    <div class="container-parent" style="margin-bottom: 30px;">
        {{-- Profile guru bk --}}
        <div class="container-profile-guru">
            <div class="card-image">
                <h1 class="nama-bimbingan">{{ $jenisLayanan->jenis_layanan }}</h1>
                <img src="{{ $jenisLayanan->fotos()->first() ? asset('storage/'.$jenisLayanan->fotos()->first()->img_location) : '' }}" class="card-img" alt="">
                <div style="max-height: 200px;margin-top: 20px;background-color: #f5f5f5;border-radius: 8px; padding: 10px 10px 10px; position:relative;">
                    <p style="max-height: 190px; overflow:auto">{{ $jenisLayanan->keterangan }}</p>
                </div>
            </div>
        </div>

        {{-- input --}}
        <div class="container-input">
            <form action="{{ url('/input', $jenisLayanan->jenis_layanan) }}" method="POST">
                @csrf
            <div class="inputan">
                @if($jenisLayanan->isMultiChild == 1)
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Siswa</label>
                    <select name="siswas_id[]" id="tom-select-siswa" {{ $jenisLayanan->isMultiChild == 1 ? 'multiple' : ''}} placeholder="Cari Nama Siswa">
                        @foreach($siswas as $siswa)
                            @if($siswa->id == auth()->user()->siswa->id)
                            @else
                            <option value="{{ $siswa->id }}">{{$siswa->user->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                @else
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $siswas->user->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $siswas->kelas->nama }}" readonly>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $siswas->no_telepon }}" readonly>
                </div> -->
                @endif
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_konseling">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input type="time" class="form-control" id="exampleFormControlInput1" name="waktu_konseling">
                </div>

                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat</label>
                        <select name="tempat_id" id="tom-select-tempat" placeholder="Lokasi Pertemuan..." class="form-select">
                            @foreach($tempats as $tempat)
                                <option value="{{ $tempat->id }}">{{$tempat->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                @if($jenisLayanan->isCareerOriented == 1)
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Karir</label>
                        <select name="karir" id="tom-select-karir" placeholder="Karir Selanjutnya..." class="form-select">
                            <option value="KERJA">Kerja</option>
                            <option value="KULIAH">Kuliah</option>
                            <option value="WIRAUSAHA">Wirausaha</option>
                        </select>
                    </div>
                    @endif

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alasan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan"></textarea>
                </div>
                <div class="button-m">
                    <button class="button-submit" type="submit" style="color: white;">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>



</body>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src="/js/jadwalkonseling.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
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

</script>

</html>