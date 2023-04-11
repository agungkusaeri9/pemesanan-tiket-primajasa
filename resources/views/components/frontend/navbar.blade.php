<div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('assets/fe2/images/primajasa.png') }}" class="img-fluid" alt="">
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
                            <a class="nav-link" href="#">Layanan</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="">Tiket</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="">Tentang Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-outline-danger ml-lg-2" href="{{ route('login') }}">Masuk</a>
                                <a class="btn btn-danger ml-lg-2" href="#">Daftar</a>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>


</div>
