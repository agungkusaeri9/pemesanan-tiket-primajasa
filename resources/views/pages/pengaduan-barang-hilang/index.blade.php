@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <x-Frontend.Alert />
        <div class="row">
            <div class="col-md-3">
                <x-Frontend.SidebarUser />
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">

                        <div class="">
                            <h3 class="mb-4 text-center">Penduan Barang Hilang</h3>
                            <a href="{{ route('pengaduan-barang-hilang.create') }}" class="btn btn-primary mb-2">Buat
                                Pengaduan</a>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Berangkat</th>
                                        <th>Nama Bus</th>
                                        <th>Lokasi Pemberangkatan</th>
                                        <th>Lokasi Tujuan</th>
                                        <th>Jam Berangkat</th>
                                        <th>Nama Barang</th>
                                        <th>Foto Barang</th>
                                        <th>Status</th>
                                    </tr>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal_berangkat }}</td>
                                            <td>{{ $item->jadwal->armada->jenis_armada }}</td>
                                            <td>{{ $item->jadwal->pemberangkatan }}</td>
                                            <td>{{ $item->jadwal->tujuan }}</td>
                                            <td>{{ $item->jadwal->jam_berangkat }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td><img src="{{ $item->foto() }}" class="img-fluid" alt=""
                                                    style="max-height:40px"></td>
                                            <td>
                                                {!! $item->status() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
@endsection

@push('styles')
    <style>
        .profile {
            height: 120px;
            width: 120px;
            border-radius: 50%;
        }
    </style>
@endpush
