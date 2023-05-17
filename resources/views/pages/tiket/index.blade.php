@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5 bg-header">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('tiket.info') }}" method="get">

                                    <div class="row">
                                        {{-- <div class="col-md-4">
                                            <select name="armada_id" id="armada_id" class="form-control">
                                                <option value="">Pilih Armada</option>
                                                @foreach ($data_jenis_armada as $armada)
                                                    <option value="{{ $armada->id }}">{{ $armada->jenis_armada }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <select name="pemberangkatan" id="pemberangkatan" class="form-control">
                                                <option value="">Pilih Lokasi Pemberangkatan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="tujuan" id="tujuan" class="form-control">
                                                <option value="">Pilih Lokasi Tujuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="tanggal" class="form-control" id="date">
                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        {{-- <div class="col-md-3 align-self-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="is_pulang" name="pulang">
                                                <label class="form-check-label" for="is_pulang">
                                                    Pulang
                                                </label>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <input type="text" name="dewasa" class="form-control"
                                                placeholder="Jml Dewasa">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="anak_anak" class="form-control"
                                                placeholder="Jml Anak">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn py-2 btn-danger btn-block">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                <h2 class="text-center">Beli Tiket Bus Online Untuk Bepergian ke Rute Favorit</h2>
                <p class="text-center">
                    Bepergian ke destinasi favorit akan lebih mudah berkat jangkauan redBus yang luas di Indonesia.
                    Menawarkan operator bus terbaik dengan armada bus paling barum mencapai tujuan anda dengan aman dan
                    nyaman datang dengan harga terhangkau, terutama jika anda menggunakan salah satu dari beberapa penawaran
                    yang diberikan oleh redBus. Pun dengan segala kemudahan memesan tiket bus di platform redBus, pemesanan
                    tiket bus dapat diselesaikan dalam beberapa menit saja. Dibawah ini adalah beberapa rute dan jadwal
                    paling dicari dari berberapa rute populer di indonesia.
                </p>
                <p>
                    Perhatian : Harap diingat bahwa informasi yang diberikan dalam tabel ini dapat berubah. Silahkan
                    kunjungi situs web resmi redBus indonesia untuk tahu lebih banyak!
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3 class="text-center font-weight-bold">Cara Pemesanan Tiket</h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-t">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/fe/img/t1.png') }}" class="img-t" alt="" class="img-fluid">
                            <h2>1. Pilih Rincian Perjalanan</h2>
                            <p>
                                Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-t">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/fe/img/t2.png') }}" class="img-t" alt="" class="img-fluid">
                            <h2>2. Pilih Tiket yang sesuai</h2>
                            <p>
                                Pilih jenis transportasi, tempat duduk, tempat keberangkatan, tujuan, isi rincian penumpang
                                dan klik 'Pembayaran'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-t">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/fe/img/t3.png') }}" class="img-t" alt="" class="img-fluid">
                            <h2>3. Pembayaran</h2>
                            <p>
                                Pembayaran dapat dilakukan melalui transfer ATM, Internet banking, Alfamart, kartu
                                Kredit/Debit, Mandiri Clickpay, Bca Clickpay dll
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>
                    Hal-hal Penting untuk Diingat Saat Memesan Tiket Bus dengan Primajasa
                </h3>
                <p>
                    Beli tiket bus semakin mudah dan cepat! Primajasa menghadirkan kemudahan dan kenyamanan untuk perjalanan
                    Anda ke berbagai tempat dengan sistem pemesanan tiket bus online yang aman dan tepercaya. Ada banyak
                    pilihan rute, jadwal, operator bus, dan bahkan titik keberangkatan dan penurunan, serta promo menarik
                    yang ditawarkan. Cek info lengkap tentang harga tiket bus online, jadwal bus, dan operator bus terbaik
                    di Primajasa.
                </p>
                <ul>
                    <li>
                        Beberapa operator bus seperti Baraya Travel, Haryanto, Bhinneka Shuttle, Xtrans, NPM, Safari Dharma
                        Raya, Medali Mas, dan Aragon Shuttle menawarkan sistem Reschedule Ticket jika terjadi perubahan
                        jadwal.
                    </li>
                    <li>Bus Haryanto, NPM, MPM, dan Family Raya Ceria juga menawarkan uang kembali jika terjadi pembatalan
                        pada tiket bus Anda.</li>
                    <li>Temukan promo menarik di detail bus dalam pencarian bus Anda, seperti promo redDeals atau cashback
                        yang meringankan harga tiket bus Anda.</li>
                    <li>Promo yang berlaku saat ini sampai 30 November 2021 adalah potongan harga 10% (maksimal Rp20.000)
                        dengan cashback Rp20.000 yang akan masuk ke dompet redBus untuk pengguna baru menggunakan kode NEW
                        saat memesan tiket bus online.</li>
                    <li>Promo lain yang berlaku adalah diskon 5% (maksimal RP10.000) dengan cashback Rp10.000 untuk satu
                        kali pesan tiket bus online di Primajasa. Gunakan kode PAKAILAGI.</li>
                    <li>Beberapa operator bus terfavorit berdasarkan rating penumpang adalah Efisiensi (4.75), Xtrans
                        (4.65), Baraya Travel (4.57), Nusantara (4.52), dan Joglosemar (4.44).</li>
                    <li>Rute-rute terpopuler serta harga tiket bus di primajasa adalah Jakarta-Bandung PP (Rp115.000),
                        Jogja-Semarang (Rp80.000-Rp130.000), Surabaya-Bali (Rp185.000-Rp400.000), Bekasi-Bandung
                        (Rp115.000), Jogja-Jakarta PP (Rp170.000-Rp215.000), dan Semarang-Jakarta (Rp160.000-Rp225.000).
                    </li>
                    <li>Rata-rata fasilitas yang ditawarkan setiap operator adalah AC, reclining seat, USB port atau
                        charging point, hiburan, bantal, dan selimut (untuk perjalanan jauh), makan (untuk perjalanan jauh),
                        dan air mineral.</li>
                    <li>Beberapa bus seperti AM Trans, Sembodo, ANS, dan Transport Express Jaya menawarkan fasilitas toilet,
                        smoking room, dan pemberhentian di rest area.</li>
                    <li>Sementara operator lain seperti PO Medali Emas, Safari Dharma Ceria, ANS, NPM, dan MPM dilengkapi
                        dengan fitur keamanan seperti GPS tracking.</li>
                    <li>Pesan tiket bus di primajasa mudah sekali. Di halaman utama situs primajasa, masukkan nama kota asal
                        dan kota tujuan pada kolom pencarian, serta tetapkan tanggal keberangkatan dan/atau tanggal
                        kepulangan.</li>
                    <li>Baca pilihan bus dan periksa detail bus, seperti harga, fasilitas, titik keberangkatan, titik
                        penurunan, dan jadwal berangkat dan tiba.</li>
                    <li>Pilih kursi yang diinginkan, lalu isi data pribadi Anda sebagai penumpang dan pesan tiket bus
                        pilihan.</li>
                    <li>Bayar menggunakan salah satu cara yang diinginkan: kartu kredit/debit, transfer ATM, internet
                        banking, tunai lewat kasir Alfamart dan lain-lain.</li>
                    <li>Setelah pembayaran dikonfirmasi, tiket bus akan dikirim ke email dan handphone Anda.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .bg-header {
            background-image: url("{{ asset('assets/fe/img/bg-header1.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            padding: 150px;
            background-position: top;
            opacity: .7;
        }

        .img-t {
            height: 220px;
            margin-bottom: 40px
        }

        .card-t {
            height: 420px
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(function() {
            $.ajax({
                url: '{{ route('jadwal.getbyarmada') }}',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '_token': '{{ csrf_token() }}',
                    armada_id: ""
                },
                success: function(response) {
                    let data = response.data;
                    $('select[name=pemberangkatan]').empty();
                    $('select[name=pemberangkatan]').append(
                        '<option>Pilih Lokasi Pemberangkatan</option>');
                    data.forEach(jadwal => {
                        $('select[name=pemberangkatan]').append(`
                            <option value="${jadwal.pemberangkatan}">${jadwal.pemberangkatan}</option>
                            `);
                    });
                }
            })

            $('select[name=pemberangkatan]').on('change', function() {
                let pemberangkatan = $(this).val();
                let armada_id = $('select[name=armada_id]').val();
                $.ajax({
                    url: '{{ route('jadwal.gettujuanbypemberangkatan') }}',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        armada_id: armada_id,
                        pemberangkatan: pemberangkatan
                    },
                    success: function(response) {
                        let data = response.data;
                        $('select[name=tujuan]').empty();
                        $('select[name=tujuan]').append('<option>Pilih Lokasi Tujuan</option>');
                        data.forEach(jadwal => {
                            $('select[name=tujuan]').append(`
                            <option value="${jadwal.tujuan}">${jadwal.tujuan}</option>
                            `);
                        });
                    }
                })
            })
        })
    </script>
@endpush
