@extends('layouts.app')
@section('content')
    </header>

    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3">
                    <h2 class="title-section">Tentang Kami</h2>
                    <div class="divider"></div>

                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nisi saepe eum ipsa. Tempore dolore
                        itaque est blanditiis libero fugiat, ea nostrum nam at tempora quis, facilis officiis nemo mollitia.
                    </p>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="img-fluid py-3 text-center">
                        <img src="{{ asset('assets/fe/img/homepage.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
