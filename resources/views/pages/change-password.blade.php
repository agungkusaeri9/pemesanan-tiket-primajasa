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
                            <h3>Ubah Password</h3>
                            <h5>
                                Anda bisa mengatur password anda
                            </h5>
                        </div>
                        <form action="{{ route('change-password.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label class="mb-2">Password Saat Ini</label>
                                    <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                        required="" name="current_password">
                                    @error('current_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2">Password Baru</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        required="" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                        required="" name="password_confirmation">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                                </div>
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
