@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5 bg-header">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('tiket.info') }}" method="get">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="armada_id" id="armada_id" class="form-control">
                                                <option value="">Pilih Armada</option>
                                                @foreach ($data_jenis_armada as $armada)
                                                    <option value="{{ $armada->id }}">{{ $armada->jenis_armada }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="pemberangkatan" id="pemberangkatan" class="form-control">
                                                <option value="">Pilih Lokasi Pemberangkatan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="tujuan" id="tujuan" class="form-control">
                                                <option value="">Pilih Lokasi Tujuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <input type="date" name="tanggal" class="form-control" id="date">
                                        </div>
                                        <div class="col-md-2 align-self-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="is_pulang" name="pulang">
                                                <label class="form-check-label" for="is_pulang">
                                                  Pulang
                                                </label>
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="dewasa" class="form-control" placeholder="Jml Dewasa">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="anak_anak" class="form-control" placeholder="Jml Anak">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn py-2 btn-danger btn-block">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                <h2 class="text-center">Beli Tiket Bus Online Untuk Bepergian ke Rute Favorit</h2>
                <p class="text-center">
                    Bepergian ke destinasi favorit akan lebih mudah berkat jangkauan redBus yang luas di Indonesia. Menawarkan operator bus terbaik dengan armada bus paling barum mencapai tujuan anda dengan aman dan nyaman datang dengan harga terhangkau, terutama jika anda menggunakan salah satu dari beberapa penawaran yang diberikan oleh redBus. Pun dengan segala kemudahan memesan tiket bus di platform redBus, pemesanan tiket bus dapat diselesaikan dalam beberapa menit saja. Dibawah ini adalah beberapa rute dan jadwal paling dicari dari berberapa rute populer di indonesia.
                </p>
                <p>
                    Perhatian : Harap diingat bahwa informasi yang diberikan dalam tabel ini dapat berubah. Silahkan kunjungi situs web resmi redBus indonesia untuk tahu lebih banyak!
                </p>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .bg-header{
            background-image: url("{{ asset('assets/fe/img/bg-header1.jpg') }}");
            background-size:cover;
            background-repeat: no-repeat;
            padding:150px;
            background-position: top;
            opacity: .7;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(function(){
            $('select[name=armada_id]').on('change', function(){
                let armada_id = $(this).val();
                $.ajax({
                    url:'{{ route('jadwal.getbyarmada') }}',
                    type:'POST',
                    dataType:'JSON',
                    data:{
                        '_token': '{{ csrf_token() }}',
                        armada_id:armada_id
                    },
                    success:function(response){
                        let data = response.data;
                        $('select[name=pemberangkatan]').empty();
                        $('select[name=pemberangkatan]').append('<option>Pilih Lokasi Pemberangkatan</option>');
                        data.forEach(jadwal => {
                            $('select[name=pemberangkatan]').append(`
                            <option value="${jadwal.pemberangkatan}">${jadwal.pemberangkatan}</option>
                            `);
                        });
                    }
                })
            })

            $('select[name=pemberangkatan]').on('change', function(){
                let pemberangkatan = $(this).val();
                let armada_id = $('select[name=armada_id]').val();
                $.ajax({
                    url:'{{ route('jadwal.gettujuanbypemberangkatan') }}',
                    type:'POST',
                    dataType:'JSON',
                    data:{
                        '_token': '{{ csrf_token() }}',
                        armada_id:armada_id,
                        pemberangkatan:pemberangkatan
                    },
                    success:function(response){
                        let data = response.data;
                        $('select[name=tujuan]').empty();
                        $('select[name=tujuan]').append('<option>Pilih Lokasi Tujuan</option>');
                        data.forEach(jadwal => {
                            $('select[name=tujuan]').append(`
                            <option value="${jadwal.tujuan}">${jadwal.tujuan}</option>
                            `);
                        });
                    }
                })
            })
        })
    </script>
@endpush
