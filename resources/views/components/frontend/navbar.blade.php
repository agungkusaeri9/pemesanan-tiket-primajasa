<div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('assets/fe/img/primajasa.png') }}" class="img-fluid" alt="">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('layanan.index') }}">Layanan</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('tiket.index') }}">Tiket</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-outline-danger ml-lg-2" href="{{ route('login') }}">Masuk</a>
                                <a class="btn btn-danger ml-lg-2" href="{{ route('register') }}">Daftar</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ auth()->user()->avatar() }}"
                                        width="40" height="40" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"
                                        onclick="document.getElementById('formLogout').submit()">Keluar</a>
                                </div>
                                <form action="{{ route('logout') }}" method="post" id="formLogout">
                                    @csrf
                                </form>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="btn btn-outline-danger ml-lg-2" href="javascript:void(0)"
                                    onclick="document.getElementById('formLogout').submit()">Keluar</a>
                                <form action="{{ route('logout') }}" method="post" id="formLogout">
                                    @csrf
                                </form>
                            </li> --}}
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>


</div>
@push('styles')
    <style>
        .bg-custom-1 {
            background-color: #85144b;
        }

        .bg-custom-2 {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        }
    </style>
@endpush
