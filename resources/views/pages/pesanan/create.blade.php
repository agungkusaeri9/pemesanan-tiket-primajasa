@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h4>Pesanan Anda</h4>
                <p>Isi detail profile anda dan tinjau pemesanan</p>
            </div>
        </div>
        <form action="{{ route('pesanan.store') }}" method="post">
            @csrf
            <input type="hidden" name="tanggal" value="{{ $tanggal }}">
            <input type="hidden" name="armada_jadwal_id" value="{{ $jadwal->id }}">
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        @auth
                                            {{ auth()->user()->name ?? '-' }}
                                        @else
                                            Detail Profil (untuk e-tiket/voucher)
                                        @endauth
                                    </h5>
                                </div>
                                <div class="card-body row">
                                    @auth
                                        <div class="col-md">
                                            <div class='form-group mb-3'>
                                                <label for='nomor_telepon' class='mb-2'>No. HP</label>
                                                <input type='text' name='nomor_telepon'
                                                    class='form-control @error('nomor_telepon') is-invalid @enderror'
                                                    value='{{ auth()->user()->nomor_telepon }}' >
                                                @error('nomor_telepon')
                                                    <div class='invalid-feedback'>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class='form-group mb-3'>
                                                <label for='email' class='mb-2'>Email</label>
                                                <input type='text' name='email'
                                                    class='form-control @error('email') is-invalid @enderror'
                                                    value='{{ auth()->user()->email }}' readonly>
                                                @error('email')
                                                    <div class='invalid-feedback'>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    @else
                                    <div class="col-md-12">
                                        <div class='form-group mb-3'>
                                            <label for='nama_lengkap' class='mb-2'>Nama Lengkap</label>
                                            <input type='text' name='nama_lengkap'
                                                class='form-control @error('nama_lengkap') is-invalid @enderror'
                                                value=''>
                                            @error('nama_lengkap')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class='form-group mb-3'>
                                            <label for='no_hp' class='mb-2'>No. HP</label>
                                            <input type='text' name='no_hp'
                                                class='form-control @error('no_hp') is-invalid @enderror'
                                                value=''>
                                            @error('no_hp')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class='form-group mb-3'>
                                            <label for='email' class='mb-2'>Email</label>
                                            <input type='text' name='email'
                                                class='form-control @error('email') is-invalid @enderror'
                                               >
                                            @error('email')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>Detail Penumpang</h5>
                            @for ($i = 1; $i <= $dewasa; $i++)
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between">
                                        Dewasa {{ $i }}
                                        <a href="javascript:void(0)" class="text-decoration-none btnPilihKursi"
                                            data-id="{{ $i }}">Pilih Kursi</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class='form-group mb-3'>
                                                    <label for='penumpang_title' class='mb-2'>Title</label>
                                                    <input type='text' name='penumpang_title[]'
                                                        class='form-control @error('penumpang_title') is-invalid @enderror' required>
                                                    @error('penumpang_title')
                                                        <div class='invalid-feedback'>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class='form-group mb-3'>
                                                    <label for='penumpang_nik' class='mb-2'>NIK</label>
                                                    <input type='text' name='penumpang_nik[]'
                                                        class='form-control @error('penumpang_nik') is-invalid @enderror' required>
                                                    @error('penumpang_nik')
                                                        <div class='invalid-feedback'>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class='form-group mb-3'>
                                                    <label for='penumpang_nama_lengkap' class='mb-2'>Nama Lengkap</label>
                                                    <input type='text' name='penumpang_nama_lengkap[]'
                                                        class='form-control @error('penumpang_nama_lengkap') is-invalid @enderror' required>
                                                    @error('penumpang_nama_lengkap')
                                                        <div class='invalid-feedback'>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class='form-group mb-3'>
                                                    <label for='penumpang_nomor_kursi' class='mb-2'>Nomor Tempat Duduk</label>
                                                    <input type='text' name='penumpang_nomor_kursi[]'
                                                        class='form-control @error('penumpang_nomor_kursi') is-invalid @enderror' required>
                                                    @error('penumpang_nomor_kursi')
                                                        <div class='invalid-feedback'>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body ">
                                    <h5>
                                        <input type="checkbox" name="asuransi_perjalanan" id="asuransi_perjalanan">
                                       <label for="asuransi_perjalanan">Asuransi Perjalanan</label>
                                    </h5>
                                    <p>Perlindungan untuk kecelakaan, taguhan medis, dan pembatalan tiket</p>
                                    <ul>
                                        <li>Pertanggungan hingga Rp. 5.000.000 untuk kematian & cacat akibat kecelakaan
                                            hingga
                                            Rp. 600.000</li>
                                        <li>
                                            Pertanggungan untuk tagihan medis akibat kecelakaan
                                        </li>
                                    </ul>
                                    <div class="text-right">
                                        <p class="text-primary">
                                            Rp. 15.000/pax
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-right">
                                        <button class="btn btn-danger px-5">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <span> {{ $jadwal->pemberangkatan }}</span>
                            <span style="font-size:20px">
                                &rarr;
                            </span>
                            <span> {{ $jadwal->tujuan }}</span>
                        </div>
                        <div class="card-body">
                            <h5>{{ $tanggal2 }}</h5>
                            <h4 class="text-primary mt-3">
                                {{ $jadwal->armada->jenis_armada }}
                            </h4>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="text-center">
                                    <h5>{{ $jadwal->jam_berangkat }}</h5>
                                    <p>{{ $jadwal->pemberangkatan }}</p>
                                    <h5>{{ $jadwal->terminal_pemberangkatan }}</h5>
                                </div>
                                <div>
                                    <span style="font-size:30px">
                                        &rarr;
                                    </span>
                                </div>
                                <div class="text-center">
                                    <h5>{{ $jadwal->jam_sampai }}</h5>
                                    <p>{{ $jadwal->tujuan }}</p>
                                    <h5>{{ $jadwal->terminal_tujuan }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalKursi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pilih Kursi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <span> {{ $jadwal->pemberangkatan }}</span>
                                    <span style="font-size:20px">
                                        &rarr;
                                    </span>
                                    <span> {{ $jadwal->tujuan }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4>Keterangan :</h4>
                            <div class="d-flex justify-content-start">
                                <div class="ket1"></div>
                                <span class="ml-2">Dipilih</span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="ket2"></div>
                                <span class="ml-2">Sudah Dipesan</span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="ket3"></div>
                                <span class="ml-2">Kosong</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .ket1 {
            height: 30px;
            width: 30px;
            background: #90242C;
            border-radius: 4px;
            transform: rotate(90deg);
            margin-bottom: 5px;
        }

        .ket2 {
            height: 30px;
            width: 30px;
            background: #294CC8;
            border-radius: 4px;
            transform: rotate(90deg);
            margin-bottom: 5px;
        }

        .ket3 {
            height: 30px;
            width: 30px;
            background: #D9D9D9;
            border-radius: 4px;
            transform: rotate(90deg);
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(function() {
            // $('#modalKursi').modal('show');
            // $('body').on('click', '.btnPilihKursi', function() {
            //     let i = $(this).data('id');
            //     $('#modalKursi').modal('show');
            // })
        })
    </script>
@endpush
