@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2>{{ $pemberangkatan }} -> {{ $tujuan }}</h2>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h5>{{ $tanggal }}</h5>
                    <p>{{ $dewasa . ' Dewasa ' . $anak . ' Anak' }} </p>
                    <button class="btn btn-outline-secondary">Ubah Rute</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @foreach ($jadwal as $jdw)
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>{{ $jdw->armada->jenis_armada }}</h4>
                        <h5 class="text-muted">Super Excecutive</h5>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <h5>{{ $jdw->jam_berangkat }}</h5>
                                <h6 class="text-muted">{{ $jdw->pemberangkatan }}</h6>
                            </div>
                            <div class="col-1">
                                <span style="font-size:40px">
                                    &rarr;
                                </span>
                            </div>
                            <div class="col-md-3">
                                <h5>{{ $jdw->jam_sampai }}</h5>
                                <h6 class="text-muted">{{ $jdw->tujuan }}</h6>
                            </div>
                            <div class="col-md-3"><h4><span>&#124;</span> Rp. {{ number_format($jdw->harga_dewasa,0,'','.') }}</h4></div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="" class="text-primaty text-decoration-none">Detail Bus</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="text-primaty text-decoration-none">Rute</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="text-primaty text-decoration-none">Detail Harga</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 justify-content-end">
                                <a href="{{ route('pesanan.create',[
                                    'idjadwal' => $jdw->id,
                                    'jml_anak' => $anak,
                                    'jml_dewasa' => $dewasa,
                                    'tanggal' => request('tanggal')
                                ]) }}" class="btn btn-danger">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
