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
                        <form action="{{ route('pesanan.update',$pesanan->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <h4>{{ $pesanan->jadwal->armada->jenis_armada }}</h4>
                            <!-- Section: Timeline -->
                            <section class="pt-3 pb-1 ml-3">
                                <ul class="timeline-with-icons">
                                    <li class="timeline-item mb-2">
                                        <span class="timeline-icon">
                                            <i class="fas fa-bullet text-primary fa-sm fa-fw"></i>
                                        </span>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="">
                                                    <h6>{{ $pesanan->jadwal->jam_berangkat }}</h6>
                                                    <p class="small">
                                                        {{ $pesanan->tanggal_berangkat->translatedFormat('d F Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6>{{ $pesanan->jadwal->pemberangkatan }}</h6>
                                                <h6>{{ $pesanan->jadwal->terminal_pemberangkatan }}</h6>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline-item">
                                        <span class="timeline-icon">
                                            <i class="fas fa-bullet text-primary fa-sm fa-fw"></i>
                                        </span>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="">
                                                    <h6>{{ $pesanan->jadwal->jam_sampai }}</h6>
                                                    <p class="small">
                                                        {{ $pesanan->tanggal_berangkat->translatedFormat('d F Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <h6>{{ $pesanan->jadwal->tujuan }}</h6>
                                                <h6>{{ $pesanan->jadwal->terminal_tujuan }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                            <!-- Section: Timeline -->
                            <h5>Pilih Metode Pembayaran</h5>
                            <div class="d-flex justify-content-between">
                                @foreach ($metode_pembayaran as $mp)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input d-none mp" data-id="{{ $mp->id }}"
                                            type="radio" name="metode_pembayaran_id"
                                            id="metode_pembayaran_id{{ $mp->id }}" value="{{ $mp->id }}">
                                        <label
                                            class="form-check-label btn btn-secondary lmp label-metode_pembayaran_id{{ $mp->id }}"
                                            for="metode_pembayaran_id{{ $mp->id }}">{{ $mp->jenis }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <h5 class="mt-4">Rincian Harga</h5>
                            <ul class="list-unstyled">
                                <li class="list-item mb-2 d-flex justify-content-between">
                                    <span>{{ $pesanan->jadwal->armada->jenis_armada . ' ' . $pesanan->detail()->count() . 'x' }}</span>
                                    <span>Rp.
                                        {{ number_format($pesanan->total - $pesanan->convencience_fee - $pesanan->handling_fee) }}</span>
                                </li>
                                <li class="list-item mb-2 d-flex justify-content-between">
                                    <span>Convencience Fee</span>
                                    <span>Rp. {{ number_format($pesanan->convencience_fee) }}</span>
                                </li>
                                <li class="list-item mb-2 d-flex justify-content-between">
                                    <span>Handling Fee</span>
                                    <span>Rp. {{ number_format($pesanan->handling_fee) }}</span>
                                </li>
                                <li class="list-item mb-2 d-flex justify-content-between">
                                    <span class="font-weight-bold">Harga Total</span>
                                    <span class="font-weight-bold">Rp. {{ number_format($pesanan->total) }}</span>
                                </li>
                            </ul>
                            <div class="form-group">
                                <div class="text-right">
                                    <button class="btn btn-danger">Bayar Sekarang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('styles')
    <style>
        .timeline-with-icons {
            border-left: 1px solid hsl(0, 0%, 90%);
            position: relative;
            list-style: none;
        }

        .timeline-with-icons .timeline-item {
            position: relative;
        }

        .timeline-with-icons .timeline-item:after {
            position: absolute;
            display: block;
            top: 0;
        }

        .timeline-with-icons .timeline-icon {
            position: absolute;
            left: -48px;
            background-color: hsl(217, 88.2%, 90%);
            color: hsl(217, 88.8%, 35.1%);
            border-radius: 50%;
            height: 31px;
            width: 31px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $('.mp').on('change', function() {
            $(`.lmp`).addClass('btn-secondary');
            let id = $(this).data('id');
            $(`.label-metode_pembayaran_id${id}`).removeClass('btn-secondary');
            $(`.label-metode_pembayaran_id${id}`).addClass('btn-primary');
        })
    </script>
@endpush
