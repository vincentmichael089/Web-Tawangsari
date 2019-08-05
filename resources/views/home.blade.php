<!DOCTYPE html>
<html lang="en">

<head>
    <!--❤wml❤-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
        <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
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
<div class="container" style="min-height:100vh; padding-top:25vh">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            
                    <a class="btn btn-success" href="/posts/create/" role="button" style="margin: 12px">Tulis Berita Baru</a>
                    <h3>Berita Anda</h3>
                    @if (count($posts)>0)
                    <table class="table table-striped">
                            <tr>
                                <th>Judul Berita</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Ubah</a></th>
                                    <th>
                                        {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=> 'POST', 'class'=> 'pull-right','style'=>'inline-block'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Hapus',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}   
                                    </th>
                                </tr>                       
                            @endforeach
                        </table>
                    @else
                        <p>Belum ada Berita</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
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

    <script src="../js/index.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
</body>
</html>
