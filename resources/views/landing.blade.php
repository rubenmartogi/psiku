<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Capcapung</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">Capcapung</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('landing.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('id')}}">Indonesia</a>
                                <a class="dropdown-item" href="{{url('en')}}">Inggris</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{url('login')}}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <!-- Header -->
<!-- Header -->
<!-- <header class="bg-blue py-5"> -->
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center d-flex">
                <!-- Logo di kiri -->
                <div class="col-lg-6 text-center">
                    <img class="img-fluid" src="{{ asset('img/landing/LOGO.png') }}" alt="Capcapung Logo" style="max-width: 550px;">
                    <p class="lead mb-5 text-white-50">@lang('landing.tagline')</p>
                </div>
                <!-- Video di kanan -->
                <div class="col-lg-6 d-flex justify-content-end p-0 overflow-hidden">
                    <video class="video-fluid" autoplay muted loop>
                        <source src="{{ asset('img/landing/vidio.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </header>





    <!-- <section class="text-center p-5"> -->
    <section class="p-5 text-center" style="background: white;">
        <h3>@lang('landing.why')</h3>
    </section>

    <!-- Page Content -->
    <section class="p-5 text-center" style="background: white;">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6">
                <h4>{{ __('landing.title1') }}</h4>
                <p>{{ __('landing.content1') }}</p>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" 
                        src="https://www.youtube.com/embed/F1uT7TMm4sw" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>




    <section class="p-5 text-center" style="background: white;">
    <div class="container p-5">
        <div class="row">
            <!-- Video di Kiri -->
            <div class="col-lg-6 d-none d-lg-block text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" 
                        src="https://www.youtube.com/embed/kWui4EtKtFQ" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <!-- Teks di Kanan -->
            <div class="col-lg-6">
                <h4>{{ __('landing.title2') }}</h4>
                <p>{{ __('landing.content2') }}</p>
            </div>
        </div>
    </div>
</section>




    <section class="p-5 text-center" style="background: white;">
    <div class="container p-5">
        <div class="row">
            <!-- Teks di Kiri -->
            <div class="col-lg-6">
                <h4>{{ __('landing.title3') }}</h4>
                <p>{{ __('landing.content3') }}</p>
            </div>
            <!-- Video di Kanan -->
            <div class="col-lg-6 d-none d-lg-block text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" 
                        src="https://www.youtube.com/embed/ES_pHLM0z0I" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>




   


<section class="p-5 text-center" style="background: white;">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                <div class="card">
                    <iframe src="{{ asset('art/capcapung.pdf') }}" class="card-img-top" style="width: 100%; height: 300px;" frameborder="0"></iframe>
                    <div class="card-body d-none d-lg-block">
                        <p class="card-text">Artikel 1</p>
                    </div>
                </div>
            </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Celana.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Artikel 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Jas.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Artikel 3</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Selimut.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Artikel 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 text-center" style="background: white;">
     <!-- <section class="text-center p-5"> -->
    <button class="btn btn-primary">Tambahkan Artikel</button>
</section>

 <!-- <section class="text-center bg-blue" > -->
    <section class="p-5 text-center" style="background: white;">
        <h3>{{ __('landing.temukan') }}</h3>
    </section>

    <section class="p-5 text-black" style="background: white;">
    <!-- <section class="text-white bg-blue"> -->
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6 mb-4 mb-sm-0">
                <h5>Alamat</h5>
                <p>Jalan Sianipar Balige</p>
                <br>
                <h5>Kunjungi akun resmi Instagram kami</h5>
                <p>
                    <a href="http://instagram.com/capcapung" target="_blank" class="text-black">
                        <img src="img/landing/instagram.png" alt="Instagram" width="24" height="24"> Instagram
                    </a>
                </p>
                <h5>Kunjungi akun resmi TikTok kami</h5>
                <p>
                    <a href="http://tiktok.com/@capcapungofficial" target="_blank" class="text-black">
                        <img src="img/landing/tiktok.png" alt="TikTok" width="24" height="24"> TikTok
                    </a>
                </p>
               <h5>Kunjungi akun resmi YouTube kami</h5>
                <p>
                    <a href="http://www.youtube.com/@Capcapung" target="_blank" class="text-black">
                        <img src="img/landing/youtube.png" alt="YouTube" width="24" height="24"> YouTube
                    </a>
                </p>
            </div>
            <div class="col-md-6">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63784.65951407885!2d99.0681676!3d2.3223929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04584fee0d55%3A0xd13973a06cb33d47!2sJl.%20Sianipar%2C%20Pardede%20Onan%2C%20Kec.%20Balige%2C%20Toba%2C%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1734233039352!5m2!1sen!2sid"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Capcapung Official</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>

