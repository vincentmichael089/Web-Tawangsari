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
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    
</head>

<body>
    <!--HEADER-->
    <header>
        <div id="bg-image"></div>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="/res/branding-01.png" style="max-height: 35px"
                            alt=""></a>
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
                    <span class="">Selamat datang di website Desa Tawangsari </span>
                </h1>
            </div>

            <img class="bottom-image" src="../res/section-trans.svg" alt="" style="width: 100vm">

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
                            <span class="desa-tawangsari">Desa Tawangsari</span>  termasuk ke dalam Kecamatan Kaligesing, Kabupaten Purworejo, provinsi Jawa Tengah. Desa ini terdiri atas tiga dusun, yaitu
                            Dusun Wonogiri, Dusun Ketawang, dan Dusun Bulu. 
                        </p>
                        <br>
                        <div class="row counters">
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span class="counter">195.52</span>
                                <p>km<sup>2</sup> Luas Wilayah Desa</p>
                            </div>
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span class="counter">1,100</span>
                                <p>Jumlah Penduduk</p>
                            </div>
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span class="counter">3</span>
                                <p>Produk Hasil Bumi Unggulan</p>
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

                    <h4 style="text-align: center">Hasil peternakan dan perkebunan Desa Tawangsari</h4>
                    <br>
                </div>
                <div class="row center">
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Kambing Kaligesing</h4>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae itaque quas iusto
                                eligendi rem porro exercitationem nostrum commodi corporis dolorum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Cengkeh</h4>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae itaque quas iusto
                                eligendi rem porro exercitationem nostrum commodi corporis dolorum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Kopi</h4>
                            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae itaque quas iusto
                                eligendi rem porro exercitationem nostrum commodi corporis dolorum.</p>
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
                            <img id="poly-map" class="section-content" src="../res/mliwis-hill-01.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8" style="padding-top: 4em">
                            <h4 style="text-align: center">Mliwis Hill, Lorem ipsum dolor sit amet.</h4>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fuga corporis nemo porro
                                error eius? Delectus, molestias maiores quisquam pariatur sapiente, dolorum molestiae
                                tenetur rem quia consectetur perferendis sequi omnis!

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION AKSES LOKASI-->
        <section id="section-akses-lokasi" class="body-section center">

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
                            <p class="lead"><span class="desa-tawangsari"> Desa Tawangsari</span> berjarak kurang lebih 8 kilometer dari pusat Kecamatan Kaligesing, berjarak kurang lebih 16 kilometer dari pusat Kabupaten Purworejo, dan terletak di perbatasan Provinsi Jawa Tengah - Daerah Istimewa Yogyakarta.</p>
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
                            <li><span class="contacts-info-title">E-mail:</span><br>email@yahoo.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom" class="text-center">
            <p>Desa Tawangsari, Kecamatan Kaligesing, Kabupaten Purworejo</p>
        </div>
    </footer>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="{{asset("js/jquery.counterup.js")}}"></script>
    

    <script src="{{asset("js/index.js")}}"></script>

</body>

</html>