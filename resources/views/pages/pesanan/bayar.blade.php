@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <h4>Rincian Pembayaran</h4>
                <h5>Cek kembali data pesanan anda sebelum melakukan pembayaran</h5>
                <div class="card">
                    <div class="card-body">
                       <p>Lakukan Pembayaran Sebelum @php
                           $time = $pesanan->created_at->addHour(1)->translatedFormat('d F Y H:i');
                           $time2 = $pesanan->created_at;
                           $time3 = $pesanan->created_at->addHour(1);
                       @endphp
                       {{ $time }}</p>
                       <p>Selesaikan Pembayaran dalam waktu {{ $time2 > Carbon\Carbon::now() ? '0' : $time3->diffInMinutes(Carbon\Carbon::now()) }} menit</p>
                       <hr>
                       <h6>Kode Pembayaran</h6>
                       <span class="small">{{ $pesanan->kode }}</span>
                       <hr>
                        <ol>
                            <li>Buka aplikasi/web penjualan tiket wisata</li>
                            <li>Login terlebih dahulu</li>
                            <li>Masuk ke menu pesanan</li>
                            <li>Klik salah satu pesanan yang ingin dibayarkan</li>
                            <li>Lakukan pembayaran dengan metode yang sudah dipilih</li>
                            <li>Selesai, anda perlu menunggu beberapa menit untuk proses validasi dari admin</li>
                        </ol>
                        <hr>
                        <p class="text-center">Sudah melakukan transaksi?</p>
                        <p>Setelah pembayaran anda di validasi, kami akan mengirimkan e-tiket bus ke email dan SMS</p>
                        <div class="text-center mt-4">
                            <a href="{{ route('pesanan.show',$pesanan->kode) }}" class="btn btn-danger">Saya Sudah Bayar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
