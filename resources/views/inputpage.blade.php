<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konseling SMK Taruna Bhakti</title>
    <link rel="stylesheet" href="css/inputpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

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
        <button class="button-nav"><a href="/jadwalkonseling">Jadwal Konseling</a></button>
    </header>

    <div class="container-parent">
        {{-- Profile guru bk --}}
        <div class="container-profile-guru">
            <div class="card-image">
                <h1 class="nama-bimbingan">Bimbingan Pribadi</h1>
                <img src="{{asset('assets/Personal data-pana.png')}}" class="card-img" alt="">
                <div class="card-content">
                    <p class="deskripsi">Bimbingan pribadi adalah proses di mana seseorang mendapatkan bantuan, arahan, dan dukungan untuk mengembangkan diri dan mencapai tujuan pribadi mereka. Ini melibatkan interaksi antara seorang individu yang membutuhkan bimbingan (disebut peserta) dan seorang profesional yang berperan sebagai pembimbing.</p>
                </div>
            </div>
        </div>

        {{-- input --}}
        <div class="container-input">
            <div class="inputan">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input type="time" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alasan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="button-m">
                    <button class="button-submit"><a href="#">Submit</a></button>
                  </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer">
        <p>Design and Developed by Andy Alphard Rahmana</p>
    </div>


</body>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src="/js/jadwalkonseling.js"></script>
<script src="{{asset('js/script.js')}}"></script>

</html>
