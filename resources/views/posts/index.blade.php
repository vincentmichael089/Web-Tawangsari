<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Desa Tawangsari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!--HEADER-->
    <header>
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
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/coordinates">Peta Potensi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/login">Login </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--MAIN-->
    <main>
        <section id="section-berita" style="padding-bottom: 0">
            <div class="container" style="min-height: 100vh; padding-top: 10vh">
                @include('inc.messages')
                @if(count($posts)>0)
                    @foreach ($posts as $post)
                        <a href="/posts/{{$post->id}}">
                           <div class="box">
                                <div class="row">
                                        <div class="col-md-4" style="max-height:200px;">
                                            <div class="berita-pic">
                                                <img id="poly-map" class="berita-pic-pic" src="../res/poly-map.svg" alt="" srcset="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="berita-content">
                                                <h1>{{$post->title}}</h1>
                                                <small>Dibagikan tanggal {{$post->created_at}}</small>
                                            </div>
                                        </div>
                                </div>
                           </div>
                        </a>
                    @endforeach
                    {{$posts->links()}}
                @else
                    <p>No posts found!</p>
                @endif
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
</body>

</html>