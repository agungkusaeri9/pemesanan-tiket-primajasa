@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Jadwal {{ $armada->jenis_armada }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Jadwal {{ $armada->jenis_armada }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('admin.jadwal.create') }}?jenis_armada_id={{ $armada->id }}" class="btn btn-sm btn-primary mb-3"><i
                                    class="fas fa-plus"></i> Tambah Data</a>
                            <table class="table table-striped table-hover" id="dTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pemberangkatan</th>
                                        <th>Tujuan</th>
                                        <th>Jam Berangkat</th>
                                        <th>Jam Sampai</th>
                                        <th>Harga Dewasa</th>
                                        <th>Harga Anak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->terminal_pemberangkatan . ' - ' . $item->pemberangkatan }}</td>
                                            <td>{{ $item->terminal_tujuan . ' - ' . $item->tujuan }}</td>
                                            <td>{{ $item->jam_berangkat }}</td>
                                            <td>{{ $item->jam_sampai }}</td>
                                            <td>{{ $item->harga_dewasa }}</td>
                                            <td>{{ $item->harga_anak_anak }}</td>
                                            <td>
                                                <a href="{{ route('admin.jadwal.edit', $item->id) }}?jenis_armada_id={{ $armada->id }}"
                                                    class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>

                                                <form action="" method="post" class="d-inline" id="formDelete">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="jenis_armada_id" value="{{ $armada->id }}">
                                                    <button
                                                        data-action="{{ route('admin.jadwal.destroy', $item->id) }}"
                                                        class="btn btn-sm btn-danger btnDelete"><i class="fas fa-trash"></i>
                                                        Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
            $('body').on('click', '.btnDelete', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let action = $(this).data('action');
                        $('#formDelete').attr('action', action);
                        $('#formDelete').submit();
                    }
                })
            })
        })
    </script>
    @include('admin.layouts.partials.sweetalert')
@endpush
