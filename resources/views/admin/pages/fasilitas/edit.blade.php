@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Fasilitas</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.fasilitas.index') }}">Fasilitas</a>
                </div>
                <div class="breadcrumb-item">Edit Fasilitas</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.fasilitas.update', $item->id) }}" method="post"
                                class="needs-validation" novalidate="" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="jenis_armada_id" value="{{ $armada->id }}">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Ikon</label>
                                        <br>
                                        <img src="{{ $item->icon() }}" class="img-fluid" style="max-height:80px" alt="">
                                    </div>
                                    <div class="col-md align-self-center">
                                        <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                            name="icon" value="{{ old('icon') }}">
                                        @error('icon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fasilitas</label>
                                    <input type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                        required="" name="fasilitas"
                                        value="{{ $item->fasilitas ?? old('fasilitas') }}">
                                    @error('fasilitas')
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
