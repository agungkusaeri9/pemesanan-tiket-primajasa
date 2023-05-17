@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pesanan</h4>
                        </div>
                        <div class="card-body">
                            {{ $count['pesanan'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Armada</h4>
                        </div>
                        <div class="card-body">
                            {{ $count['armada'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>User</h4>
                        </div>
                        <div class="card-body">
                            {{ $count['users'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-striped table-hover" id="dTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Convencience Fee</th>
                                    <th>Handling Fee</th>
                                    <th>Pembayaran</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan_terbaru as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->user->name ?? '-' }}</td>
                                        <td>Rp {{ number_format($item->convenience_fee,0,',','.') }}</td>
                                        <td>Rp {{ number_format($item->handling,0,',','.') }}</td>
                                        <td>{{ $item->metode_pembayaran->jenis ?? '-' }}</td>
                                        <td>Rp {{ number_format($item->total,0,',','.') }}</td>

                                        <td>{!! $item->status() !!}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/be/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/be/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/be/sweetalert2/sweetalert2.all.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/be/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/be/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/be/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/be/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(function() {
            $('#dTable').DataTable();
        })
    </script>
    @include('admin.layouts.partials.sweetalert')
@endpush
