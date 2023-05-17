@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2>{{ $pemberangkatan }}
                        @if ($pemberangkatan || $tujuan)
                        ->
                        @endif
                    {{ $tujuan }}</h2>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h5>{{ $tanggal }}</h5>
                    <p>{{ $dewasa . ' Dewasa ' . $anak . ' Anak' }} </p>
                    <a href="{{ route('tiket.index') }}" class="btn btn-outline-secondary">Ubah Rute</a>
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
                        <form action="">
                            <input type="hidden" name="tujuan" value="{{ $tujuan }}">
                            {{-- jam berangkat --}}
                            <div class="jam-berangkat mb-3">
                                <h6 class="mb-2">Jam Berangkat</h6>
                                <ul class="list-unstyled">
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="pagi" id="00-06"
                                                name="jam_berangkat" @checked(request('jam_berangkat') === 'pagi')>
                                            <label class="form-check-label" for="00-06">
                                                00 - 06
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="siang" id="06-12"
                                                name="jam_berangkat"  @checked(request('jam_berangkat') === 'siang')>
                                            <label class="form-check-label" for="06-12">
                                                06 - 12
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="sore" id="12-18"
                                                name="jam_berangkat"  @checked(request('jam_berangkat') === 'sore')>
                                            <label class="form-check-label" for="12-18">
                                                12 - 18
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="malam" id="18-00"
                                                name="jam_berangkat"  @checked(request('jam_berangkat') === 'malam')>
                                            <label class="form-check-label" for="18-00">
                                                18 - 00
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="jam-sampai">
                                <h6 class="mb-2">Waktu Sampai</h6>
                                <ul class="list-unstyled">
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="pagi" id="ws00-06"
                                                name="jam_sampai"  @checked(request('jam_sampai') === 'pagi')>
                                            <label class="form-check-label" for="ws00-06">
                                                00 - 06
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="siang" id="ws06-12"
                                                name="jam_sampai"  @checked(request('jam_sampai') === 'siang')>
                                            <label class="form-check-label" for="ws06-12">
                                                06 - 12
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="sore" id="wsws12-18"
                                                name="jam_sampai"  @checked(request('jam_sampai') === 'sore')>
                                            <label class="form-check-label" for="wsws12-18">
                                                12 - 18
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="malam" id="ws18-00"
                                                name="jam_sampai"  @checked(request('jam_sampai') === 'malam')>
                                            <label class="form-check-label" for="ws18-00">
                                                18 - 00
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="naik-dari">
                                <h6>Naik Dari</h6>
                                <input type="text" name="pemberangkatan" class="form-control form-control-sm"
                                    placeholder="Naik Dari..." value="{{ request('pemberangkatan') }}">
                            </div>

                            <button class="btn btn-secondary btn-block btn-sm mt-4">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @foreach ($jadwal as $jdw)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>{{ $jdw->armada->jenis_armada }}</h4>
                            <h5 class="text-muted">{{ $jdw->terminal_pemberangkatan }}</h5>
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
                                <div class="col-md-3">
                                    <h4><span>&#124;</span> Rp. {{ number_format($jdw->harga_dewasa, 0, '', '.') }}</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-inline">
                                        {{-- <li class="list-inline-item">
                                            <a href="" class="text-primaty text-decoration-none">Detail Bus</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" class="text-primaty text-decoration-none">Rute</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" class="text-primaty text-decoration-none">Detail Harga</a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="col-6 justify-content-end">
                                    <form action="{{ route('pesanan.create') }}" method="get">
                                        <input type="hidden" name="id" value="{{ $jdw->id }}">
                                        <input type="hidden" name="dewasa" value="{{ $dewasa }}">
                                        <input type="hidden" name="anak" value="{{ $anak }}">
                                        <input type="hidden" name="tanggal" value="{{ request('tanggal') }}">
                                        <button class="btn btn-danger">Beli Sekarang</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row justify-content-center">
                    {{ $jadwal->appends(request()->all())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
