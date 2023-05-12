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
                        <div class="text-center">
                            <h3>Buat Pengaduan Barang Hilang</h3>
                        </div>
                        <form action="{{ route('pengaduan-barang-hilang.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class='form-group mb-3'>
                                <label for='name' class='mb-2'>Nama Bus - Tanggal Berangkat - Jam Berangkat</label>
                               <select name="armada_jadwal_id" id="armada_jadwal_id" class="form-control">
                                <option value="" selected>Pilih</option>
                                @foreach ($pesanans as $pesanan)
                                    <option value="{{ $pesanan->armada_jadwal_id }}">{{ $pesanan->jadwal->armada->jenis_armada . ' - ' . $pesanan->tanggal_berangkat . ' - ' . $pesanan->jadwal->jam_berangkat }}

                                        <input type="hidden" name="tanggal_berangkat" value="{{ $pesanan->tanggal_berangkat }}"></option>
                                @endforeach
                               </select>
                                @error('name')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class='form-group mb-3'>
                                <label for='nama_barang' class='mb-2'>Nama Barang</label>
                                <input type='text' name='nama_barang'
                                    class='form-control @error('nama_barang') is-invalid @enderror'
                                    value='{{ old('nama_barang') }}'>
                                @error('email')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class='form-group mb-3'>
                                <label for='foto_barang' class='mb-2'>Foto Barang</label>
                                <input type='file' name='foto_barang'
                                    class='form-control @error('foto_barang') is-invalid @enderror'
                                    >
                                @error('foto_barang')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
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
