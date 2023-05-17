@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Jenis Armada</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.jenis-armada.index') }}">Jenis Armada</a></div>
                <div class="breadcrumb-item">Tambah Jenis Armada</div>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('admin.jenis-armada.store') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jenis Armada</h4>
                            </div>
                            <div class="card-body">

                                @csrf
                                <div class="form-group">
                                    <label>Jenis Armada</label>
                                    <input type="text" class="form-control @error('jenis_armada') is-invalid @enderror"
                                        required="" name="jenis_armada" value="{{ old('jenis_armada') }}">
                                    @error('jenis_armada')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Supir</label>
                                    <input type="text" class="form-control @error('supir') is-invalid @enderror"
                                        required="" name="supir" value="{{ old('supir') }}">
                                    @error('supir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        required="" name="gambar" value="{{ old('gambar') }}">
                                    @error('gambar')
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
                    <div class="col-md-8">
                        <div class="col-md">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Fasilitas</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group fieldGroup">
                                        <span class="input-group pl-0 ml-0">
                                            <div class="col-md-4">
                                                <label for="fasilitas_icon">Ikon</label>
                                                <input type="file" class="form-control" name="fasilitas_icon[]"
                                                    id="fasilitas_icon" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="fasilitas">Fasilitas</label>
                                                <input type="text" class="form-control" name="fasilitas[]" id="fasilitas"
                                                    required>
                                            </div>
                                            <div class="col-md-3 align-self-end">
                                                <a href="javascript:void(0)" class="btn btn-lg btn-success addMore"><i
                                                        class="fas fa-plus"></i></a>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="form-group fieldGroupCopy" style="display: none;">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jadwal</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group fieldGroupJawdal">
                                    <span class="input-group pl-0 ml-0">
                                        <div class="col-md-4">
                                            <label for="jadwal_terminal_pemberangkatan">Terminal
                                                Pemberangkatan</label>
                                            <input type="text" class="form-control"
                                                name="jadwal_terminal_pemberangkatan[]" id="jadwal_terminal_pemberangkatan"
                                                required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_terminal_tujuan">Terminal Tujuan</label>
                                            <input type="text" class="form-control" name="jadwal_terminal_tujuan[]"
                                                id="jadwal_terminal_tujuan" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_pemberangkatan">Pemberangkatan</label>
                                            <input type="text" class="form-control" name="jadwal_pemberangkatan[]"
                                                id="jadwal_pemberangkatan" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_tujuan">Tujuan</label>
                                            <input type="text" class="form-control" name="jadwal_tujuan[]"
                                                id="jadwal_tujuan" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_jam_berangkat">Jam Berangkat</label>
                                            <input type="text" class="form-control" name="jadwal_jam_berangkat[]"
                                                id="jadwal_jam_berangkat" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_jam_sampai">Jam Sampai</label>
                                            <input type="text" class="form-control" name="jadwal_jam_sampai[]"
                                                id="jadwal_jam_sampai" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_harga_dewasa">Harga Untuk Dewasa</label>
                                            <input type="text" class="form-control" name="jadwal_harga_dewasa[]"
                                                id="jadwal_harga_dewasa" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jadwal_harga_anak">Harga Anak Anak</label>
                                            <input type="text" class="form-control" name="jadwal_harga_anak[]"
                                                id="jadwal_harga_anak" required>
                                        </div>
                                        <div class="col-md-3 align-self-end">
                                            <a href="javascript:void(0)" class="btn btn-lg btn-success addMoreJadwal"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </span>
                                </div>
                                <div class="form-group fieldGroupJadwalCopy" style="display: none;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </form>
        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var maxGroup = 20;

            //melakukan proses multiple input
            $(".addMore").click(function() {
                if ($('body').find('.fieldGroup').length < maxGroup) {
                    var fieldHTML = `<div class="form-group fieldGroup">
                        <span class="input-group pl-0 ml-0">
                                        <div class="col-md-4">
                                            <label for="fasilitas_icon">Ikon</label>
                                            <input type="file" class="form-control" name="fasilitas_icon[]"
                                                id="fasilitas_icon" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="fasilitas">Fasilitas</label>
                                            <input type="text" class="form-control" name="fasilitas[]" id="fasilitas"
                                            required>
                                        </div>
                                        <div
                                            class="col-md-3
                                                        align-self-end">
                                            <a href="javascript:void(0)" class="btn btn-lg btn-danger remove"><i
                                                    class="fas fa-minus"></i></a>
                                        </div>
                                    </span>
                        </div>`;
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".fieldGroup").remove();
            });

            // //melakukan proses multiple input
            // $(".addMoreJadwal").click(function() {
            //     if ($('body').find('.fieldGroupJadwal').length < maxGroup) {
            //         var fieldHTML = `
            //         <span class="input-group pl-0 ml-0">
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_terminal_pemberangkatan">Terminal Pemberangkatan</label>
            //                                         <input type="text" class="form-control" name="jadwal_terminal_pemberangkatan[]"
            //                                             id="jadwal_terminal_pemberangkatan" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_terminal_tujuan">Terminal Tujuan</label>
            //                                         <input type="text" class="form-control" name="jadwal_terminal_tujuan[]"
            //                                             id="jadwal_terminal_tujuan" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_pemberangkatan">Pemberangkatan</label>
            //                                         <input type="text" class="form-control" name="jadwal_pemberangkatan[]"
            //                                             id="jadwal_pemberangkatan" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_tujuan">Tujuan</label>
            //                                         <input type="text" class="form-control" name="jadwal_tujuan[]"
            //                                             id="jadwal_tujuan" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_jam_berangkat">Jam Berangkat</label>
            //                                         <input type="text" class="form-control" name="jadwal_jam_berangkat[]"
            //                                             id="jadwal_jam_berangkat" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_jam_sampai">Jam Sampai</label>
            //                                         <input type="text" class="form-control" name="jadwal_jam_sampai[]"
            //                                             id="jadwal_jam_sampai" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_harga_dewasa">Harga Untuk Dewasa</label>
            //                                         <input type="text" class="form-control" name="jadwal_harga_dewasa[]"
            //                                             id="jadwal_harga_dewasa" required>
            //                                     </div>
            //                                     <div class="col-md-4">
            //                                         <label for="jadwal_harga_anak">Harga Anak Anak</label>
            //                                         <input type="text" class="form-control" name="jadwal_harga_anak[]"
            //                                             id="jadwal_harga_anak" required>
            //                                     </div>
            //                                     <div
            //                                 class="col-md-3
            //                                             align-self-end">
            //                                 <a href="javascript:void(0)" class="btn btn-lg btn-danger removeJadwal"><i
            //                                         class="fas fa-minus"></i></a>
            //                             </div>
            //                                 </span>
            //         `;
            //         $('body').find('.fieldGroup:last').after(fieldHTML);
            //     } else {
            //         alert('Maximum ' + maxGroup + ' groups are allowed.');
            //     }
            // });

            // //remove fields group
            // $("body").on("click", ".removeJadwal", function() {
            //     $(this).parents(".fieldGroup").remove();
            // });
        });
    </script>
@endpush
