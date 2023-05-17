<div>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <img src="{{ auth()->user()->avatar() }}" class="img-fluid rounded-circle profile" alt="">
                <h5 class="mt-2">Selamat Datang</h5>
                <h3>{{ auth()->user()->name }}</h3>
            </div>
            <ul class="list-inline mt-3">
                {{-- <li class="list-item my-2">

                    <a class="text-decoration-none text-dark" href="{{ route('profile.index') }}">
                        <i class="fas fa-fw fa-user-edit"></i>
                        Profile</a>
                </li> --}}
                <li class="list-item my-2">
                    <a class="text-decoration-none text-dark" href="{{ route('profile.index') }}">
                        <i class="fas fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="list-item my-2">
                    <a class="text-decoration-none text-dark" href="{{ route('pengaduan-barang-hilang.index') }}">
                        <i class="fas fa-fw fa-user"></i> Pengaduan Barang Hilang</a>
                </li>
                {{-- <li class="list-item my-2">
                    <a class="text-decoration-none text-dark" href="">
                        <i class="fas fa-fw fa-question-circle"></i>
                        Pusat Bantuan</a>
                </li> --}}
                <li class="list-item my-2">
                    <a class="text-decoration-none text-dark" href="{{ route('pesanan.index') }}">
                        <i class="fas fa-fw fa-exchange-alt"></i>
                        Riwayat Pesanan</a>
                </li>
                <li class="list-item my-2">
                    <a class="text-decoration-none text-dark" href="{{ route('change-password.index') }}">
                        <i class="fas fa-fw fa-key"></i>
                        Ubah Password</a>
                </li>
            </ul>
        </div>
    </div>
</div>
