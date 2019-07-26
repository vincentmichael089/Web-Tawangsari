<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Berita | Desa Tawangsari</title>
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
                                <a class="nav-link js-scroll-trigger" href="/posts">Berita</a>
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
        <section id="section-tambah-berita" style="padding-bottom: 0;">
            <div class="container" style="min-height: 100vh; padding-top: 10vh; background: #f4f4f4;">
                <h1>Tambah Berita Baru</h1>
                <br>
                @include('inc.messages')
                    {{ Form::open(['action' => 'PostsController@store', 'method'=>'POST']) }}
                        <div class="form-group">
                            {{Form::label('title','Judul Berita')}}
                            {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Judul Berita'])}}
                        </div>

                        <div class="form-group">
                                {{Form::label('body','Isi Berita')}}
                                {{Form::textArea('body','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Isi Berita'])}}
                            </div>
                            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    {{ Form::close() }}
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
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
  
</body>

</html>