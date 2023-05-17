@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    @foreach ($data_jenis_armada as $jenis_armada)
                        <div class="item" data-merge="1">
                            <div class="row">
                                <div class="col-7">
                                    <img src="{{ $jenis_armada->gambar() }}" alt="" class="img-fluid gambar-armada">
                                </div>
                                <div class="col-5">
                                    <h2 class="text-decoration-underline warna-utama font-weight-bold">{{ $jenis_armada->jenis_armada }}</h2>
                                    <h4 class="mt-3 mb-4">Fasilitas</h4>
                                    <ul class="list-unstyled">
                                        @foreach ($jenis_armada->fasilitas as $fasilitas)
                                            <li class="list-item mb-3 d-flex justify-content-start">
                                                <div>
                                                    <img src="{{ $fasilitas->icon() }}" alt=""
                                                        class="img-icon-fasilitas">
                                                </div>
                                                <p class="ml-3">{{ $fasilitas->fasilitas }}</p>


                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-10">
                <h2 class="text-center">Primajasa saat ini melayani lebih dari 20 rute</h2>
                <p class="text-center">
                    Layanan bus yang ditawarkan saat ini melayani lebih dari 20 rute antar kota dalam provinsi (AKDP) dan antar kota provinsi (AKAP) untuk wilayawh di jabodetabek, Banten, dan Jawa Barat. Menawarkan berbagai kelas busm dari ekonomi AC, ekonomi non-AC, hingga Super Eksekutif.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mt-4 mb-4">
            <div class="col-md-4 align-self-center">
                <h5>Fitur</h5>
                <h3 class="text-primary">Mengapa Primajasa Lebih Unggul dari yang lain?</h3>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos illum laborum quas asperiores quae eum, doloremque itaque, ipsum odio amet veritatis, sit distinctio facilis possimus iure incidunt mollitia voluptatum nesciunt voluptates beatae animi similique ex! Possimus, blanditiis omnis. Officiis facere quas libero nam, voluptatibus eligendi praesentium nemo dolorum ab animi!
                </p>
                <a href="" class="btn btn-danger">Selengkapnya</a>
            </div>
            <div class="col-md-4">
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Rute Cepat</h5>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam eaque nemo voluptates, soluta error dolorem dignissimos repudiandae cumque explicabo voluptatum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Terpercaya</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam eaque nemo voluptates, soluta error dolorem dignissimos repudiandae cumque explicabo voluptatum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Proses Refund Mudah</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam eaque nemo voluptates, soluta error dolorem dignissimos repudiandae cumque explicabo voluptatum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="{{ asset('assets/fe/img/l1.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/fe/img/l2.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/fe/img/l3.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/fe/owlcarousel/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fe/owlcarousel/dist/assets/owl.theme.default.css') }}">
    <style>
        .img-icon-fasilitas {
            height: 25px;
        }
        .gambar-armada{
            max-height: 450px;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('assets/fe/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(function() {
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                merge: true,
                nav:true,
                responsive: {
                    678: {
                        mergeFit: true
                    },
                    1000: {
                        mergeFit: false
                    }
                }
            });
        })
    </script>
@endpush
