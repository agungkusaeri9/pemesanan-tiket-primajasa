@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <x-Frontend.Alert />
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ auth()->user()->avatar() }}" class="img-fluid rounded-circle profile" alt="">
                            <h5 class="mt-2">Selamat Datang</h5>
                            <h3>{{ auth()->user()->name }}</h3>
                        </div>
                        <ul class="list-inline mt-3">
                            <li class="list-item my-2">

                                <a class="text-decoration-none text-dark" href="{{ route('profile.index') }}">
                                    <i class="fas fa-fw fa-user-edit"></i>
                                    Profile</a>
                            </li>
                            <li class="list-item my-2">
                                <a class="text-decoration-none text-dark" href="">
                                    <i class="fas fa-fw fa-user"></i> Pemesanan Saya</a>
                            </li>
                            <li class="list-item my-2">
                                <a class="text-decoration-none text-dark" href="">
                                    <i class="fas fa-fw fa-users"></i>
                                    Daftar Penumpang</a>
                            </li>
                            <li class="list-item my-2">
                                <a class="text-decoration-none text-dark" href="">
                                    <i class="fas fa-fw fa-question-circle"></i>
                                    Pusat Bantuan</a>
                            </li>
                            <li class="list-item my-2">
                                <a class="text-decoration-none text-dark" href="">
                                    <i class="fas fa-fw fa-exchange-alt"></i>
                                    Riwayat Pesanan</a>
                            </li>
                            <li class="list-item my-2">
                                <a class="text-decoration-none text-dark" href="">
                                    <i class="fas fa-fw fa-key"></i>
                                    Ubah Password</a>
                            </li>
                            <li class="list-item my-2">
                                <a class="text-decoration-none text-dark" href="">
                                    <i class="fas fa-fw fa-envelope"></i>
                                    Ubah Email</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>Profile</h3>
                            <h5>
                                Anda bisa mengatur detail profile anda
                            </h5>
                        </div>
                        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class='form-group mb-3'>
                                <label for='name' class='mb-2'>Name</label>
                                <input type='text' name='name'
                                    class='form-control @error('name') is-invalid @enderror'
                                    value='{{ auth()->user()->name ?? old('name') }}'>
                                @error('name')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class='form-group mb-3'>
                                <label for='email' class='mb-2'>Email</label>
                                <input type='text' name='email'
                                    class='form-control @error('email') is-invalid @enderror'
                                    value='{{ auth()->user()->email ?? old('email') }}' readonly>
                                @error('email')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class='form-group mb-3'>
                                <label for='nomor_telepon' class='mb-2'>Nomor Telepon</label>
                                <input type='text' name='nomor_telepon'
                                    class='form-control @error('nomor_telepon') is-invalid @enderror'
                                    value='{{ auth()->user()->nomor_telepon ?? old('nomor_telepon') }}'>
                                @error('nomor_telepon')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='kewarganegaraan' class='mb-2'>Kewarganegaraan</label>
                                <input type='text' name='kewarganegaraan'
                                    class='form-control @error('kewarganegaraan') is-invalid @enderror'
                                    value='{{ auth()->user()->kewarganegaraan ?? old('kewarganegaraan') }}'>
                                @error('kewarganegaraan')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='kota' class='mb-2'>Kota</label>
                                <input type='text' name='kota'
                                    class='form-control @error('kota') is-invalid @enderror'
                                    value='{{ auth()->user()->kota ?? old('kota') }}'>
                                @error('kota')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='avatar' class='mb-2'>Avatar</label>
                                <input type='file' name='avatar'
                                    class='form-control @error('avatar') is-invalid @enderror'>
                                @error('avatar')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Update</button>
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
