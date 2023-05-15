@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Metode Pembayaran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('admin.metode-pembayaran.index') }}">Metode Pembayaran</a></div>
        <div class="breadcrumb-item">Edit Metode Pembayaran</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.metode-pembayaran.update',$item->id) }}" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="" selected disabled>Pilih Jenis</option>
                                    <option @selected($item->jenis === 'Cash') value="Cash">Cash</option>
                                    <option @selected($item->jenis === 'Bank Transfer') value="Bank Transfer">Bank Transfer</option>
                                    <option @selected($item->jenis === 'Kartu Kredit/Debit') value="Kartu Kredit/Debit">Kartu Kredit/Debit</option>
                                </select>
                                @error('jenis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    required="" name="nama" value="{{ $item->nama ?? old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor</label>
                                <input type="number" class="form-control @error('nomor') is-invalid @enderror"
                                    required="" name="nomor" value="{{ $item->nomor ?? old('nomor') }}">
                                @error('nomor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pemilik</label>
                                <input type="text" class="form-control @error('pemilik') is-invalid @enderror"
                                    required="" name="pemilik" value="{{ $item->pemilik ?? old('pemilik') }}">
                                @error('pemilik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn float-right btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
