@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <x-Frontend.Alert />
        <div class="row">
            <div class="col-md-3">
                <x-Frontend.SidebarUser/>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">

                        <div class="">
                            <h3 class="mb-4 text-center">Riwayat Pesanan</h3>
                           <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Pemberangkatan</th>
                                    <th>Tujuan</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($items as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->user->name ?? '-' }}</td>
                                    <td>{{ $item->tanggal_berangkat->translatedFormat('d M Y') . ' ' . $item->jadwal->armada->jam_berangkat }}</td>
                                    <td>{{ $item->jadwal->pemberangkatan }}</td>
                                    <td>{{ $item->jadwal->tujuan }}</td>
                                    <td>Rp {{ number_format($item->total,0,',','.') }}</td>
                                    <td>
                                        {!! $item->status() !!}
                                    </td>
                                    <td>
                                        <a href="{{ route('pesanan.show',$item->kode) }}" class="btn btn-info btn-sm">Detail</a>
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
