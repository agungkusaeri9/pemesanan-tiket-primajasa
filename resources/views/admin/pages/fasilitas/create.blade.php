@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Fasilitas {{ $armada->jenis_armada }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.fasilitas.index') }}?jenis_armada_id={{ $armada->id }}">Fasilitas {{ $armada->jenis_armada }}</a></div>
                <div class="breadcrumb-item">Tambah Fasilitas {{ $armada->jenis_armada }}</div>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('admin.fasilitas.store') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="jenis_armada_id" value="{{ $armada->id }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Fasilitas</h4>
                            </div>
                            <div class="card-body">

                                @csrf
                                <div class="form-group">
                                    <label>Ikon</label>
                                    <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                        required="" name="icon" value="{{ old('icon') }}">
                                    @error('icon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Fasilitas</label>
                                    <input type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                        required="" name="fasilitas" value="{{ old('fasilitas') }}">
                                    @error('fasilitas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn float-right btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
