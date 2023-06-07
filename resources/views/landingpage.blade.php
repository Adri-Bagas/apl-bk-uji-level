<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konseling SMK Taruna Bhakti</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

    {{-- swiper css --}}
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    {{-- navbar --}}
    <header>
        <img class="logo" src="{{asset('assets/Logo-AppBk.png')}}" alt="Logo">
        <h1>Tarbhak.konseling</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">lala</a></li>
            </ul>
        </nav>
        <button class="button-nav"><a href="#">Jadwal Konseling</a></button>
    </header>

    {{-- hero --}}
    <div class="hero">
        <div class="text-content-hero">
            <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 590" xmlns="http://www.w3.org/2000/svg"
                class="transition duration-300 ease-in-out delay-150">
                <path
                    d="M 0,600 C 0,600 0,200 0,200 C 104.07655502392345,226.13397129186603 208.1531100478469,252.26794258373207 304,249 C 399.8468899521531,245.73205741626793 487.464114832536,213.0622009569378 565,191 C 642.535885167464,168.9377990430622 709.9904306220094,157.48325358851676 813,164 C 916.0095693779906,170.51674641148324 1054.574162679426,195.00478468899522 1165,204 C 1275.425837320574,212.99521531100478 1357.712918660287,206.4976076555024 1440,200 C 1440,200 1440,600 1440,600 Z"
                    stroke="none" stroke-width="0" fill="#0693e3" fill-opacity="0.53"
                    class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
                <path
                    d="M 0,600 C 0,600 0,400 0,400 C 105.07177033492823,416.04784688995215 210.14354066985646,432.0956937799043 307,420 C 403.85645933014354,407.9043062200957 492.4976076555024,367.6650717703349 572,367 C 651.5023923444976,366.3349282296651 721.866028708134,405.2440191387559 814,425 C 906.133971291866,444.7559808612441 1020.0382775119617,445.3588516746412 1128,438 C 1235.9617224880383,430.6411483253588 1337.9808612440193,415.3205741626794 1440,400 C 1440,400 1440,600 1440,600 Z"
                    stroke="none" stroke-width="0" fill="#0693e3" fill-opacity="1"
                    class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
            </svg>
            <p class="text1">Konseling dengan Guru <br> Terbaikmu:
                Prefesional, <br> Berempati dan Non Jugdemental
            </p>
            <p class="text2">Bicarakan isi hatimu, tentukan jalan <br> keluar atas masalahmu.</p>
            <button class="button-hero"><a href="#">Jadwal Konseling</a></button>
        </div>
        <div class="image-hero">
            <img src="{{asset('assets/Bu_caca-removebg.png')}}" alt="">
        </div>
    </div>
    <div class="retangle" style="margin-top: 60px"></div>
    <div class="content">
        <p class="p1">Team kami telah <br> membantu dan menyelesaikan <br> banyak masalah di sekolah ini:</p>
    </div>
    <div class="list">
        <ul>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Konflik Keluarga</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Trauma Masa Lalu</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Kecemasan Berlebihan</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Depresi</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Anak & Remaja</li>
        </ul>
        <ul>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Gangguan Kepribadian</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Hubungan Interpersonal</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Kenakalan Remaja</li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Bullying </li>
            <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #1a9cff;"></i>Dan masih banyak lainnya</li>
        </ul>
    </div>

    {{-- hero 2 --}}
    <div class="retangle"></div>
    <div class="hero2">
        <div class="texthero2">
            <div class="retanglehero2">
            </div>
            <p class="paragraf">Profile Guru <br> pembimbing <br> SMK Taruna Bhakti</p>
            <p class="paragraf2">Yuk kenali Guru yang ahli dalam <br> permasalahan & sikap <br> membantumu menjadi siwa
                yang <br> disiplin dan berprestasi</p>
        </div>
        <img src="{{ asset('assets/tigan.png') }}" alt="pinguin">
    </div>
    <div class="slider">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="{{asset('assets/Bu-caca.png')}}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Bu Caca
                            </h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="{{asset('assets/Bu-fika.png')}}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Bu Fika
                            </h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="{{asset('assets/Bu-nadia.png')}}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Bu Nadia
                            </h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="{{asset('assets/Bu-henny.jpg')}}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Bu Henny
                            </h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt=""
                                    class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
                            </h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- hero 3 --}}
    <div class="retangle" style="margin-top:200px"></div>
    <div class="hero3">
        <h2 class="subjudul">3 Langkah untuk melakukan Konseling</h2>
        <div class="kotak1">
            <div class="card" style="width: 350px;">
                <img class="card-img-top" src="{{asset('assets/Taking notes-pana.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Download Aplikasi</h5>
                    <p class="card-text">Aplikasi <span>bk.id</span> tersedia untuk para murid di SMK Taruna Bhakti agar
                        membantu konsultasi bimbingan konseling</p>
                </div>
            </div>
        </div>
        <div class="kotak2">
            <div class="card" style="width: 350px;">
                <img class="card-img-top" src="{{asset('assets/Instant information-pana.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Pilih Guru yang tepat</h5>
                    <p class="card-text">Cari Guru yang spesialisnya sama dengan permasalahanmu atau minta bantuan
                        kepada <span>team admin</span> kami</p>
                </div>
            </div>
        </div>
        <div class="kotak3">
            <div class="card" style="width: 350px;">
                <img class="card-img-top" src="{{asset('assets/Conversation-pana.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Jadwalkan sesi pertamamu</h5>
                    <p class="card-text">Cocokan jadwal ketersediaan kamu dengan psikolog Bicarakan dan lakukan konselig
                        kemudian </p>
                </div>
            </div>
        </div>
    </div>

    {{-- hero 4 --}}
    <div class="retangle"></div>
    <div class="slide-show">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="margin-left: 25%">
                <div class="carousel-item active">
                    <img src="{{asset('assets/Brosur-Web-tb.png')}}" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/syarat-pendaftaran.png')}}" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/jurusan.png')}}" class="d-block w-50" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
                style="background: black; margin-top:25% ;margin-left:250px;width:100px;height:100px; border-radius:100%">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
                style="background: black; margin-top:25% ;margin-right:250px;width:100px;height:100px; border-radius:100%">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="faq">
        <p>FAQ Tarbhak.Konseling</p>
    </div>

    <head>
        <script src="https://kit.fontawesome.com/58a6f68757.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <br>
    <div class="faq-subjudul">
        <h1>Pertanyaan Seputar Konseling</h1>
    </div>
    <ul id="accordion" class="accordion">
        <li>
            <div class="link"></i>WHAT’S YOUR SHIPPING POLICY?<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <p>Hello there</p>
            </ul>
        </li>
        <li>
            <div class="link"></i>WHAT’S YOUR RETURN POLICY?<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <p>Hello there</p>
            </ul>
        </li>
        <li>
            <div class="link"></i>HOW DO I RETURN AN ORDER?<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <p>Hello there</p>
            </ul>
        </li>
        <li>
            <div class="link"></i>HOW DO I CONTACT CUSTOMER SERVICE?<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <p>Hello there</p>
            </ul>
        </li>
    </ul>
    </div>

    {{-- patner kerja --}}
    <div class="partner-kolaborasi">
        <h1>Partner Kolaborasi</h1>
    </div>
    <div class="hr-parent">
        <hr>
    </div>
    <div class="sow-image-grid-parent">
        <div class="sow-image-grid">
            <a href="https://disdik.jabarprov.go.id/">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/logojabarprov.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="https://psmk.kemdikbud.go.id/halo">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/logosmk.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="https://www.netacad.com/">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/brand-cico.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="https://belajarmikrotik.com/">
                <img src="	https://smktarunabhakti.net/wp-content/uploads/2019/02/brand-mikrotik.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="https://learn.microsoft.com/id-id/training/">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/brand-mva.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="#">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/brand-adobe.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="https://www.seamolec.org/">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/seamolectrans.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid">
            <a href="#">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/brand-oracle.png" alt="">
            </a>
        </div>
    </div>
    <div class="sow-image-grid-parent-2">
        <div class="sow-image-grid-2">
            <a href="#">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/STI-logo-1.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid-2">
            <a href="#">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/brand-ic3.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid-2">
            <a href="https://www.dicoding.com/">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/dicoding-header-logo.png" alt="">
            </a>
        </div>
        <div class="sow-image-grid-2">
            <a href="#">
                <img src="https://smktarunabhakti.net/wp-content/uploads/2019/02/tikomdik.png" alt="">
            </a>
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
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/faq.js')}}"></script>

</html>
