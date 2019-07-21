<!DOCTYPE html>
<html lang="en">

<head>
    <!--❤wml❤-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Tawangsari, Kaligesing, Purworejo</title>
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
    <link rel="stylesheet" href="../css/style.css">
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
                                <a class="nav-link js-scroll-trigger" href="#body-section-landing">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#body-section-bidang">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#body-section-about">Peta Potensi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#body-section-porto">Login </a>
                            </li>
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
                    <span>Selamat datang di website Desa Tawangsari </span>
                </h1>
            </div>

            <img class="bottom-image" src="../res/section-trans.svg" alt="" style="width: 100vm">

        </section>
        <!--SECTION PROFIL-->
        <section id="section-profilsingkat" class="body-section center">
            <div class="container">
                <div>
                    <h1 class="text-center"><span class="section-header">Profil Singkat</span></h1>
                </div>
                <div class="row center">
                    <div class="col-md-4">
                        <img id="poly-map" class="section-content" src="../res/poly-map.svg" alt="" srcset="">
                    </div>
                    <div class="col-md-8">
                        <p class="section-content">
                            <h4>Desa Tawangsari</h4> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit,
                            harum? Culpa aut reiciendis non consequuntur minus, quisquam optio accusamus libero suscipit
                            nihil iure praesentium maxime illo, vel id adipisci possimus.
                        </p>
                        <br>
                        <div class="row counters">
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span data-toggle="counter-up">195.52</span>
                                <p>km<sup>2</sup> Luas Wilayah Desa</p>
                            </div>
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span data-toggle="counter-up">1,100</span>
                                <p>Jumlah Penduduk</p>
                            </div>
                            <div class="col-md-4 text-center" style="padding-bottom: 1em">
                                <span data-toggle="counter-up">3</span>
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
                    <h1 class="text-center"><span class="section-header">Hasil Bumi</span></h1>

                    <h4 style="text-align: center">Hasil peternakan dan perkebunan Desa Tawangsari</h4>
                    <br>
                </div>
                <div class="row center">
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Kambing Kaligesing</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae itaque quas iusto
                                eligendi rem porro exercitationem nostrum commodi corporis dolorum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Cengkeh</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae itaque quas iusto
                                eligendi rem porro exercitationem nostrum commodi corporis dolorum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box">
                            <h4>Kopi</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae itaque quas iusto
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
                    <h1 class="text-center"><span class="section-header">Wisata Tawangsari</span></h1>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <img id="poly-map" class="section-content" src="../res/mliwis-hill-01.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8">
                            <h4 style="text-align: center">Mliwis Hill, Lorem ipsum dolor sit amet.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fuga corporis nemo porro
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
                    <h1 class="text-center"><span class="section-header">Lokasi Desa Tawangsari</span></h1>

                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="mapid" style="height: 350px"></div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <h4> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Ea, enim.
                            </h4>
                            <br>
                            <p> Desa Tawangsari berjarak x dari y, z dari a, ......... dan dapat diakses
                                dengan kendaraan roda 2 maupun roda 4. Lorem ipsum, dolor sit amet consectetur
                                adipisicing
                                elit. Cum, aliquid!</p>
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
                        <p>
                            <img src="/res/logo-hz.svg" width="295px">
                        </p>
                        <p class="text">
                            Website Desa ini dibuat oleh Unit KKN-PPM Universitas Gadjah Mada 2019 Kecamatan Kaligesing
                            untuk Desa Tawangsari.</p>
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

    <script src='../js/cred.js'></script>
    <script src="../js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        ossorigin="anonymous"></script>
</body>

</html>