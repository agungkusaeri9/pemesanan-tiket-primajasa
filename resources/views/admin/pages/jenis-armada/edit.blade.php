@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Jenis Armada</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.jenis-armada.index') }}">Jenis Armada</a>
                </div>
                <div class="breadcrumb-item">Edit Jenis Armada</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.jenis-armada.update', $item->id) }}" method="post"
                                class="needs-validation" novalidate="" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label>Jenis Armada</label>
                                    <input type="text" class="form-control @error('jenis_armada') is-invalid @enderror"
                                        required="" name="jenis_armada"
                                        value="{{ $item->jenis_armada ?? old('jenis_armada') }}">
                                    @error('jenis_armada')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Supir</label>
                                    <input type="text" class="form-control @error('supir') is-invalid @enderror"
                                        required="" name="supir" value="{{ $item->supir ?? old('supir') }}">
                                    @error('supir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Gambar</label>
                                        <br>
                                        <img src="{{ $item->gambar() }}" class="img-fluid" style="max-height:80px" alt="">
                                    </div>
                                    <div class="col-md align-self-center">
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            name="gambar" value="{{ old('gambar') }}">
                                        @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
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
