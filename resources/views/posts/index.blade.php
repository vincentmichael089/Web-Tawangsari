<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Berita | Desa Tawangsari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <script src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>

<body>
    <!--HEADER-->
    <header>
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
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/coordinates">Peta Potensi</a>
                            </li>
                            <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <!--
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        -->
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
        <section id="section-berita" style="padding-bottom: 0; ">
            <div class="container berita-container" style="min-height: 100vh; padding-top: 5vh; padding-bottom: 5vh;  width: 100%;
            text-align: center;">
                @include('inc.messages')
                @if(count($posts)>0)
                    @foreach ($posts as $post)
                    <div class="levitate-2 " style=" display: inline-block;">
                        <a href="/posts/{{$post->id}}" class="post-link" style="text-decoration: none" >
                           <div class="box-berita" style="padding: 0;" >
                                <div class="row">
                                        <div class="col-md-4" style="height:150px; ">
                                            <div style="background: black">
                                            <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%; height: 100% " class="berita-pic">
                                            </div>
                                        </div>
                                        <div class="col-md-8" style="text-align: start;">
                                            <div class="berita-content" style="padding: 1.5em;">
                                            <h2 style="font-weight:600">{{$post->title}}</h2>
                                            <small><span style="font-weight: 500">Dibagikan tanggal {{$post->created_at}} oleh {{$post->user->name}}</span></small>
                                            </div>
                                        </div>
                                </div>
                           </div>
                        </a></div>
                        <br><br>
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
                <div class="col-lg footer-section">
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
                            Website Desa ini dibuat oleh Unit KKN-PPM Universitas Gadjah Mada 2019 Kecamatan Kaligesing
                            untuk Desa Tawangsari.</p>
                    </div>
                </div>

                <!-- SECTION CONTACTS -->
                <div class="col-lg footer-section">
                    <div id="footer-section-contacts">
                        <div class="footer-section-h5">
                            <h5>Kontak</h5>
                        </div>
                        <ul class="contact-info">
                            
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
            <p>Desa Tawangsari, Kecamatan Kaligesing, Kabupaten Purworejo</p>
        </div>
    </footer>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
<script src="{{asset('js/berita.js')}}"></script>
<button class="scroll-top" id="btn-up" data-scroll="up" type="button">
        <i class="fa fa-chevron-up"></i>
    </button>
</body>

</html>