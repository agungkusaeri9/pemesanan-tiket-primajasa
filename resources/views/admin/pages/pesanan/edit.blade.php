@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Pesanan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('admin.pesanan.index') }}">Pesanan</a></div>
        <div class="breadcrumb-item">Edit Pesanan</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.pesanan.update',$item->id) }}" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Metode Pembayaran</label>
                                <select name="metode_pembayaran_id" id="metode_pembayaran_id" class="form-control">
                                    <option value="" selected disabled>Pilih Jenis</option>
                                    @foreach ($metode_pembayaran as $pembayaran)
                                    <option @selected($pembayaran->id === $item->metode_pembayaran_id) value="{{ $pembayaran->id }}">{{ $pembayaran->jenis }}</option>
                                    @endforeach
                                </select>
                                @error('metode_pembayaran_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    required="" name="nama" value="{{ $item->user->name ?? old('nama') }}" readonly>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Convenience Fee</label>
                                <input type="number" class="form-control @error('convenience_fee') is-invalid @enderror"
                                    required="" name="convenience_fee" value="{{ $item->convenience_fee ?? old('convenience_fee') }}" readonly>
                                @error('convenience_fee')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Handling Fee</label>
                                <input type="text" class="form-control @error('handling_fee') is-invalid @enderror"
                                    required="" name="handling_fee" value="{{ $item->handling_fee ?? old('handling_fee') }}" readonly>
                                @error('handling_fee')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="" selected disabled>Pilih Status</option>
                                    <option @selected($item->status == 0) value="0">Belum Bayar</option>
                                    <option @selected($item->status == 1) value="1">Lunas</option>
                                </select>
                                @error('status')
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
