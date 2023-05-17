@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Jadwal {{ $armada->jenis_armada }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.jadwal.index') }}?jenis_armada_id={{ $armada->id }}">Jadwal {{ $armada->jenis_armada }}</a></div>
                <div class="breadcrumb-item">Edit Jadwal {{ $armada->jenis_armada }}</div>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('admin.jadwal.update',$item->id) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                <input type="hidden" name="jenis_armada_id" value="{{ $armada->id }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jadwal</h4>
                            </div>
                            <div class="card-body">

                                @csrf
                                <div class="form-group">
                                    <label>Terminal Pemberangkatan</label>
                                    <input type="text" class="form-control @error('terminal_pemberangkatan') is-invalid @enderror"
                                        required="" name="terminal_pemberangkatan" value="{{ $item->terminal_pemberangkatan ?? old('terminal_pemberangkatan') }}">
                                    @error('terminal_pemberangkatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Pemberangkatan</label>
                                    <input type="text" class="form-control @error('pemberangkatan') is-invalid @enderror"
                                        required="" name="pemberangkatan" value="{{ $item->pemberangkatan ?? old('pemberangkatan') }}">
                                    @error('pemberangkatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Terminal Tujuan</label>
                                    <input type="text" class="form-control @error('terminal_tujuan') is-invalid @enderror"
                                        required="" name="terminal_tujuan" value="{{ $item->terminal_tujuan ?? old('terminal_tujuan') }}">
                                    @error('terminal_tujuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tujuan</label>
                                    <input type="text" class="form-control @error('tujuan') is-invalid @enderror"
                                        required="" name="tujuan" value="{{ $item->tujuan ?? old('tujuan') }}">
                                    @error('tujuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jam Berangkat</label>
                                    <input type="text" class="form-control @error('jam_berangkat') is-invalid @enderror"
                                        required="" name="jam_berangkat" value="{{ $item->jam_berangkat ??  old('jam_berangkat') }}">
                                    @error('jam_berangkat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jam Sampai</label>
                                    <input type="text" class="form-control @error('jam_sampai') is-invalid @enderror"
                                        required="" name="jam_sampai" value="{{ $item->jam_sampai ??  old('jam_sampai') }}">
                                    @error('jam_sampai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan Waktu</label>
                                   <select name="keterangan_waktu" id="keterangan_waktu" class="form-control">
                                    <option value="" disabled selected>Pilih Waktu</option>
                                    <option @selected($item->keterangan_waktu === 'pagi') value="pagi">Pagi</option>
                                    <option @selected($item->keterangan_waktu === 'siang') value="siang">Siang</option>
                                    <option @selected($item->keterangan_waktu === 'sore') value="sore">Sore</option>
                                    <option @selected($item->keterangan_waktu === 'malam') value="malam">Malam</option>

                                   </select>
                                    @error('keterangan_waktu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga Dewasa</label>
                                    <input type="number" class="form-control @error('harga_dewasa') is-invalid @enderror"
                                        required="" name="harga_dewasa" value="{{ $item->harga_dewasa ??  old('harga_dewasa') }}">
                                    @error('harga_dewasa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga Anak Anak</label>
                                    <input type="number" class="form-control @error('harga_anak_anak') is-invalid @enderror"
                                         name="harga_anak_anak" value="{{ $item->harga_anak_anak ??  old('harga_anak_anak') }}">
                                    @error('harga_anak_anak')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn float-right btn-primary">Update Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
