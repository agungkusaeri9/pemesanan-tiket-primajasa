<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>{{ $title ?? 'Pemesanan Tiket Primajasa' }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/fe/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/fe/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/fe/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/fe/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fe/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/fe/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fe/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
        @stack('styles')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
        <!-- header section start -->
        <div class="header_section">

            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo"><a href="#"><img src="{{ asset('assets/fe/images/primajasa.png' ) }}"></a></div>
                    </div>
                    <div class="col-sm-9">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link" href="index.php">Home</a>
                                    <a class="nav-item nav-link" href="#">Layanan</a>
                                    <a class="nav-item nav-link" href="#">Tiket</a>
                                    <a class="nav-item nav-link" href="racing boots.html">Tentang Kami</a>
                                    <a class="nav-item nav-link" href="#">FAQ</a>
                                    <div class="navbar-nav ms-auto">
                                        <a class="nav-item nav-link" href="#">Profil</a>
                                    </div>
                                    <div class="navbar-nav ml-auto">
                                        <a class="nav-item nav-link" href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="banner_section">
                <div class="container-fluid">
                    <section class="slide-wrapper">
                        <div class="container-fluid">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-sm-2 padding_0">
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="banner_taital">
                                                    <h1 class="banner_text">Perjalanan Nyaman Dengan Harga Terjangkau
                                                        Bersama Kami </h1>
                                                    <p class="lorem_text">Melayani lebih dari 20 rute Antar Kota Dalam
                                                        Provinsi (AKDP) dan Antar Kota dan Antar Provinsi (AKAP) untuk
                                                        wilayah di Jabodetabek, Banten, dan Jawa Barat</p>
                                                    <button class="buy_bt">Beli Tiket</button>
                                                    <button class="more_bt">Lihat selengkapnya</button>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="shoes_img"><img src="{{ asset('assets/fe/images/homepage.png') }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- header section end -->
       @yield('content')

        <!-- Javascript files-->
        <script src="{{ asset('assets/fe/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/fe/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/fe/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/fe/js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('assets/fe/js/plugin.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ asset('assets/fe/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('assets/fe/js/custom.js') }}"></script>
        <!-- javascript -->
        <script src="{{ asset('assets/fe/js/owl.carousel.js') }}"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function() {
                        $(".fancybox").fancybox({
                            openEffect: "none",
                            closeEffect: "none"
                        });


                        $('#myCarousel').carousel({
                            interval: false
                        });

                        //scroll slides on swipe for touch enabled devices

                        $("#myCarousel").on("touchstart", function(event) {

                            var yClick = event.originalEvent.touches[0].pageY;
                            $(this).one("touchmove", function(event) {

                                var yMove = event.originalEvent.touches[0].pageY;
                                if (Math.floor(yClick - yMove) > 1) {
                                    $(".carousel").carousel('next');
                                } else if (Math.floor(yClick - yMove) < -1) {
                                    $(".carousel").carousel('prev');
                                }
                            });
                            $(".carousel").on("touchend", function() {
                                $(this).off("touchmove");
                            });
                        });
                    }
                )
        </script>
        @stack('scripts')
</body>

</html>
