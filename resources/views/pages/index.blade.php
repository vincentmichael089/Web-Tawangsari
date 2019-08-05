<!DOCTYPE html>
<html lang="en">

<head>
    <!--❤wml❤-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
        <script src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    
</head>

<body>
    <!--HEADER-->
    <header>
        <div id="bg-image"></div>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="{{asset('res/l_kkntawangsari.png')}}" style="max-height:30px"
                            alt=""> <b> Desa Tawangsari</b></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse align-middle" id="navbarCollapse" style="">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link js-scroll-trigger" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/posts">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/coordinates">Peta Potensi</a>
                            </li>
                       
                            <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/home" class="dropdown-item">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--MAIN-->
    <main>
        <!--SECTION LANDING-->
        <section id="section-landing" class="body-section">
            <div class="container center image-wrapper">
                <h1 id="landing-word">
                    <span class="" style="font-weight: 600;">Selamat Datang di Website Desa Tawangsari</span>
                </h1>
            </div>

            <img id="bottom-image" src="../res/section-trans.svg" alt="" style="width: 100vm">

        </section>
        <!--SECTION PROFIL-->
        <section id="section-profilsingkat" class="body-section center">
            <div class="container">
                <div>
                    <h1 class="text-center"><span class="section-header"><b>Profil Singkat</b></span></h1>
                </div>
                <div class="row center">
                    <div class="col-md-4">
                        <img id="poly-map" class="section-content" src="../res/poly-map.svg" alt="" srcset="">
                    </div>
                    <div class="col-lg-8">
                        <p class="section-content lead">
                            <span class="desa-tawangsari">Desa Tawangsari</span><b>  termasuk ke dalam Kecamatan Kaligesing, Kabupaten Purworejo, provinsi Jawa Tengah. Desa ini terdiri atas tiga dusun, yaitu
                            Dusun Wonogiri, Dusun Ketawang, dan Dusun Bulu. </b>
                        </p>
                        <br>
                        <div class="row counters">
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span class="counter">195.52</span>
                                <p><b>km<sup>2</sup> Luas Wilayah Desa</b></p>
                            </div>
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span class="counter">1,100</span>
                                <p><b> Jumlah Penduduk</b></p>
                            </div>
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span class="counter">3</span>
                                <p><b>Produk Hasil Bumi Unggulan</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION POTENSI-->
        <section id="section-potensi" class="body-section center">
            <div class="container">
                <div>
                    <h1 class="text-center"><span class="section-header"><b>Hasil Bumi</b></span></h1>
<br>
                    <h4 style="text-align: center">Hasil peternakan dan perkebunan Desa Tawangsari</h4>
                    <br>
                    <br>
                </div>
                <div class="row center">
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Kambing Kaligesing</h4>
                            <br>
                            <p class="lead"><span style="font-weight:500">Kambing Kaligesing</span> atau biasa disebut juga Kambing Etawa dimanfaatkan oleh masyarakat setempat untuk diternak dan diperah.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Cengkih</h4>
                            <br>
                            <p class="lead">Tanaman <span style="font-weight:500">Cengkih</span> yang sering digunakan dalam pembuatan rokok kretek merupakan salah satu komoditas pertanian / perkebunan di Desa Tawangsari. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Kopi</h4>
                            <br>
                            <p class="lead">Selain Tanaman Cengkih, Produk olahan tanaman <span style="font-weight:500">Kopi</span> juga menjadi hasil bumi yang sedang dikembangkan oleh masyarakat di Desa Tawangsari.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION WISATA-->
        <section id="section-wisata" class="body-section center">
            <div class="container">
                <div>
                    <h1 class="text-center"><span class="section-header"><b>Wisata Tawangsari</b></span></h1>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 center">
                            <img id="poly-map" class="section-content" src="../res/mliwis-hill-01.png" alt="" srcset="" style="border-radius: 8px; padding-top: 0;">
                        </div>
                        <div class="col-lg-8" style="padding-top: 4em">
                            <h4 style="text-align: center">Mliwis Hill, Lorem ipsum dolor sit amet.</h4>
                            <p class="lead"><b> Di Desa Tawangsari terdapat sebuah </b><span style="font-weight: 600;">hutan pinus</span><b> yang sudah sangat dikenal
                                oleh masyarakat dan wisatawan luar daerah dengan nama </b><span style="font-weight: 600;">Mliwis Hill.</span>
                               
                            </p>
                            <p class="lead"> <b>Di lokasi ini, pengunjung dapat bersantai menikmati suasana yang sejuk, berfoto-foto, rekreasi keluarga, atau sekedar menikmati suasana khas hutan pinus yang berada di lereng perbukitan.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION AKSES LOKASI-->
        <div id="section-akses-lokasi">
        <section id="back-test" class="body-section center">
            <div class="container">
                <div>
                    <h1 class="text-center"><span class="section-header"><b>Lokasi Desa Tawangsari</b></span></h1>

                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="mapid" style="height: 350px"></div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <p class="lead"><span class="desa-tawangsari"> Desa Tawangsari</span><b> berjarak kurang lebih 8 kilometer dari pusat Kecamatan Kaligesing, berjarak kurang lebih 16 kilometer dari pusat Kabupaten Purworejo, dan terletak di perbatasan Provinsi Jawa Tengah - Daerah Istimewa Yogyakarta.</b></p>
                            <br>
                            <div class="text-center">
                                <button type="button" class="btn btn-success text-center"
                                    onclick=" window.open('https://www.google.com/maps/place/Tawangsari,+Kaligesing,+Purworejo+Regency,+Central+Java/@-7.7093349,110.1173872,15z/data=!3m1!4b1!4m5!3m4!1s0x2e7aededc57b4999:0x272c91b8575d466d!8m2!3d-7.7075652!4d110.125369http://google.com','_blank')">Lihat
                                    di Google Maps</button></div>

                        </div>
                    </div>
                </div>
            </div>
      
        </section>
    </div>
    </main>


    <!--FOOTER-->
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <!---  SECTION ABOUT --->
                <div class="col-md footer-section">
                    <div id="footer-section-about">
                        <div style="display:flex">
                            <div style="padding-right: 10px; padding-bottom: 20px">
                                <img src="{{asset('res/l_purworedjo.png')}}" alt="" srcset="" style="max-height:110px">
                            </div>
                            <div style="padding-left: 10px; padding-bottom: 20px">
                                <img src="{{asset('res/l_kkntawangsari.png')}}" alt="" srcset=""style="max-height:100px">
                            </div>
                        </div>
                        <p class="text">
                            Website Desa Tawangsari dibuat oleh Unit KKN-PPM Universitas Gadjah Mada 2019 Kecamatan Kaligesing.</p>
                    </div>
                </div>

                <!-- SECTION CONTACTS -->
                <div class="col-md footer-section">
                    <div id="footer-section-contacts">
                        <div class="footer-section-h5">
                            <h5>Kontak</h5>
                        </div>
                        <ul class="contact-info">
                            <li><span class="contacts-info-title">Telepon:</span><br>(xxxx) xxxxxx</li>
                            <li><span class="contacts-info-title">Alamat:</span><br>Jl. Kyai Kuasyen no.1, Desa
                                Tawangsari, Kecamatan
                                Kaligesing, Kabupaten Purworejo, Jawa Tengah, Indonesia.</li>
                            <li><span class="contacts-info-title">E-mail:</span><br>tawangsari.kaligesing@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom" class="text-center">
            <p>Desa Tawangsari, Kecamatan Kaligesing, Kabupaten Purworejoa</p>
        </div>
    </footer>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="{{asset("js/jquery.counterup.js")}}"></script>
    

    <script src="{{asset("js/index.js")}}"></script>
    <button class="scroll-top" id="btn-up" data-scroll="up" type="button">
            <i class="fa fa-chevron-up"></i>
        </button>
</body>

</html>