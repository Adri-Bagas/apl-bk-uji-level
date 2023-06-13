<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konseling SMK Taruna Bhakti</title>
    <link rel="stylesheet" href="css/jadwalkonseling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

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

    {{-- content --}}
    <div class="container-profile">
        <div class="container-2">
            <div class="card-image">
                <img src="{{asset('assets/Farhan.jpeg')}}" class="card-img" alt="">

                <div class="card-content">
                    <p class="nama">Farhan marjan</p>
                    <p class="kelas">XI PPLG 2</p>
                    <p class="gmail">Farhan123@gmail.com</p>

                    <div class="container-button">
                        <button class="button-messege"><a href="#">Messege</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- content form --}}
    <div class="content-form">
        <div class="content-scroll">
            <div class="content-form-flex">
                <div class="card card-select" data-cardSelect>
                    <img src="{{asset('assets/Personal data-pana.png')}}">
                    <div class="card-section">
                        <h5>Bimbingan Pribadi</h5>
                    </div>
                    <a class="button" data-cardSelectButton href="/inputpage"></a>
                </div>

                <div class="card card-select" data-cardSelect>
                    <img src="{{asset('assets/Social interaction-bro.png')}}">
                    <div class="card-section">
                        <h5>Bimbingan Sosial</h5>
                    </div>
                    <a class="button" data-cardSelectButton href="/inputpage"></a>
                </div>

                <div class="card card-select" data-cardSelect>
                    <img src="{{asset('assets/At the office-rafiki.png')}}">
                    <div class="card-section">
                        <h5>Bimbingan Karir</h5>
                    </div>
                    <a class="button" data-cardSelectButton href="/inputpage"></a>
                </div>

                <div class="card card-select" data-cardSelect>
                    <img src="{{asset('assets/Kids Studying from Home-bro.png')}}">
                    <div class="card-section">
                        <h5>Bimbingan Belajar</h5>
                    </div>
                    <a class="button" data-cardSelectButton href="/inputpage"></a>
                </div>
            </div>
        </div>
    </div>


    {{-- content table --}}
    <div class="container-table">
        <div class="sub-judul">
            <h1>History</h1>
        </div>
    </div>

    {{-- Content Event --}}
    <div class="container-event">
        <h1  id="event">Events</h1>
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 590" xmlns="http://www.w3.org/2000/svg"
            class="transition duration-300 ease-in-out delay-150">
            <path
                d="M 0,600 C 0,600 0,200 0,200 C 108.39234449760767,221.244019138756 216.78468899521533,242.48803827751198 301,232 C 385.21531100478467,221.51196172248802 445.2535885167464,179.29186602870814 544,187 C 642.7464114832536,194.70813397129186 780.2009569377991,252.34449760765548 882,247 C 983.7990430622009,241.65550239234452 1049.9425837320573,173.33014354066987 1137,155 C 1224.0574162679427,136.66985645933013 1332.0287081339713,168.33492822966508 1440,200 C 1440,200 1440,600 1440,600 Z"
                stroke="none" stroke-width="0" fill="#0079ff" fill-opacity="0.53"
                class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
            <path
                d="M 0,600 C 0,600 0,400 0,400 C 102.41148325358853,408.25837320574163 204.82296650717706,416.51674641148327 308,398 C 411.17703349282294,379.48325358851673 515.1196172248804,334.19138755980856 610,328 C 704.8803827751196,321.80861244019144 790.6985645933014,354.7177033492823 890,380 C 989.3014354066986,405.2822966507177 1102.086124401914,422.93779904306217 1196,425 C 1289.913875598086,427.06220095693783 1364.9569377990429,413.53110047846894 1440,400 C 1440,400 1440,600 1440,600 Z"
                stroke="none" stroke-width="0" fill="#0079ff" fill-opacity="1"
                class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
        </svg>
        <div class="slider">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach ($seminars as $seminar)
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image-event">
                                    <img src="{{ $seminar->fotos()->first() ? asset('storage/'.$seminar->fotos()->first()->img_location) : '' }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content-event">
                                <p class="tanggal">{{ $seminar->tanggal_seminar }}</p>
                                <h2 class="nama-seminar">{{ $seminar->judul_seminar }}</h2>
                                <p class="nama-univ">{{ $seminar->penyelenggara }}</p>
                                <p class="description">{{ $seminar->keterangan }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        {{-- footer --}}
        {{-- <div class="footer">
            <p>Design and Developed by Andy Alphard Rahmana</p>
        </div> --}}
</body>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('dashboards') }}/libs/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script src="/js/jadwalkonseling.js"></script>
<script src="{{asset('js/script.js')}}"></script>

</html>
