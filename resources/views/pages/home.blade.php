@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-banner home-banner">
            <div class="row align-items-center flex-wrap-reverse h-100">
                <div class="col-md-6 py-5 wow fadeInLeft">
                    <h1 class="mb-4">Perjalanan Nyaman Dengan Harga Terjangkau Bersama Kami</h1>
                    <p class="text-lg text-grey mb-5">Melayani lebih dari 20 rute Antar Kota Dalam Provinsi (AKDP) dan Antar
                        Kota dan Antar Provinsi (AKAP) untuk wilayah di Jabodetabek, Banten, dan Jawa Barat</p>
                    <a href="#" class="btn btn-danger px-4 py-2">
                        Beli Tiket
                    </a>
                    <a href="#" class="ml-4 text-danger">Lihat Selengkapnya</a>
                </div>
                <div class="col-md-6 py-5 wow zoomIn">
                    <div class="img-fluid text-center">
                        <img src="{{ asset('assets/fe/img/homepage.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <a href="#why" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
        </div>
    </div>
    </header>

    <div class="container mt-4">
        <div class="row mb-4" id="why">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Kenapa Harus Primajasa</strong></h1>
                <p class="text-center">Selain Menyediakan jasa transportasi yang berdiri sejak tahun 1991, inilah
                    alasan mengapa anda harus memilih kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/fe/img/pengalaman.png') }}">
                <h4 class="mb-3 mt-2">Berpengalaman</h4>
                <p>Kami telah berpengalaman sejak tahun 1991 melayani masyarakat
                    dengan menyediakan jasa transportasi </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/fe/img/ekonomis.png') }}">
                <h4 class="mb-3 mt-2">Ekonomis</h4>
                <p>Tarif yang murah, pasti, dan transparan. Selalu menjadi yang terdepan untuk memberikan
                    pelayanan yang prima kepada semua penumpang.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/fe/img/percaya .png') }}">
                <h4 class="mb-3 mt-2">Terpercaya</h4>
                <p>Komitmen kami untuk memberikan rasa aman dan nyaman dalam perjalanan anda.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                {{-- <div class="about-img">
            </div> --}}
                <img src="{{ asset('assets/fe/img/orang.png') }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>Terpercaya</h1>
                <h2>Komitmen kami untuk memberikan rasa aman dan nyaman dalam perjalanan anda.</h2>
            </div>
        </div>
    </div>

    {{-- <div class="collection_section">
        <div class="container">
            <h1 class="new_text"><strong>Racing Boots</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
        <div class="container">
            <div class="racing_shoes">
                <div class="row">
                    <div class="col-md-8">
                        <div class="shoes-img3"><img src="{{ asset('assets/fe/img/shoes-img3.png') }}"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span>
                                <br>SHOES</strong></div>
                        <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                        <button class="seemore">See More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>
    </div>
    <!-- new collection section end -->
    <!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">Best Shoes </p>
                        <div class="shoes_icon"><img src="{{ asset('assets/fe/img/shoes-img4.png') }}"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">60</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">Best Shoes </p>
                        <div class="shoes_icon"><img src="{{ asset('assets/fe/img/shoes-img5.png') }}"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">400</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">Best Shoes </p>
                        <div class="shoes_icon"><img src="{{ asset('assets/fe/img/shoes-img6.png') }}"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">Sports Shoes</p>
                        <div class="shoes_icon"><img src="{{ asset('assets/fe/img/shoes-img7.png') }}"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">70</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">Sports Shoes</p>
                        <div class="shoes_icon"><img src="{{ asset('assets/fe/img/shoes-img8.png') }}"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">100</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">Sports Shoes</p>
                        <div class="shoes_icon"><img src="{{ asset('assets/fe/img/shoes-img9.png') }}"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('assets/fe/img/star-icon.png') }}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">90</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy_now_bt">
                <button class="buy_text">Buy Now</button>
            </div>
        </div>
    </div>
    <!-- New Arrivals section end -->
    <!-- contact section start -->
    <div class="layout_padding contact_section">
        <div class="container">
            <h1 class="new_text"><strong>Contact Now</strong></h1>
        </div>
        <div class="container-fluid ram">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Phone Numbar"
                                            name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="send_btn">
                                <button class="main_bt">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop_banner">
                        <div class="our_shop">
                            <button class="out_shop_bt">Our Shop</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- section footer start -->
    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="col-sm-6 col-lg-3">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-4 col-lg-2">
                    <p class="dummy_text"></p>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <h2 class="shop_text">PRIMAJASA </h2>
                    <div class="image-icon"><img src=""><span class="pet_text">Kami telah berpengalaman
                            sejak tahun 1991 melayani masyarakat dengan menyediakan jasa transportasi bis Antar Kota
                            Antar Propinsi (AKAP) dan Antar Kota Dalam Propinsi (AKDP), Bis Pariwisata, Airport
                            Shuttle, dan Taksi..</span></div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3">
                    <h2 class="shop_text">Tautan Bermanfaat</h2>
                    <div class="delivery_text">
                        <!-- <a href="racing boots.html">Tentang Kami<a> -->
                        <!-- <a href="shoes.html">Tiket<a> -->
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h2 class="shop_text">KONTAK INFO</h2>
                    <div="image-icon"><img src=""> <span class="pet_text">
                            KONTAK INFO
                            PT Primajasa Perdanaraya Utama
                            Marante Rejeki Jaya Jl. Mayjen Sutoyo Blok Bersama No.24, RT.8/RW.8, Cililitan,
                            Kramatjati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13640.

                            Email: info@primajasa.co.id
                            Phone: 0218009545
                            Mobile: 08121219545
                            VIEW DIRECTION

                        </span>
                </div>
            </div>
        </div>
    </div>
    <!-- section footer end --> --}}
@endsection
@push('styles')
    <style>
        .buy-tiket {
            width: 32%;
            height: 50px;
            color: #ffffff;
            background-color: #ff4e5b;
            color: #ffffff;
            font-size: 16pt;
        }
    </style>
@endpush
