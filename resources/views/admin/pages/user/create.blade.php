@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Tambah User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('admin.users.index') }}">User</a></div>
        <div class="breadcrumb-item">Tambah User</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.users.store') }}" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    required="" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    required="" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        required="" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                        required="" name="password_confirmation">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role" id="role" class="form-control" required="">
                                    <option value="" selected disabled>Pilih role</option>
                                    <option @if(old('role') === 'admin') selected @endif value="admin">Admin</option>
                                    <option @if(old('role') === 'user') selected @endif value="user">User</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Avatar</label>
                               <input type="file" name="avatar" class="form-control">
                                @error('avatar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn float-right btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
