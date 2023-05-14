@extends('layouts.app')
@section('content')
    </header>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5>Bukti Pembayaran (Receipt)</h5>
                        <table>
                            <tr>
                                <td style="width:100px">Nomor</td>
                                <td>:</td>
                                <td>{{ $item->kode }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>{{ $item->created_at->translatedFormat('d M Y, H:i') . ' (' . $item->created_at->translatedFormat('l') . ')' }}
                                </td>
                            </tr>
                        </table>

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">Data Pemesanan</h5>
                                <table>
                                    <tr>
                                        <td style="width:100px">Nama</td>
                                        <td>:</td>
                                        <td>{{ $item->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $item->user->email }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Data Pembayaran</h5>
                                <table>
                                    <tr>
                                        <td style="width:140px">Pembelian Melalui</td>
                                        <td>:</td>
                                        <td>{{ $item->metode_pembayaran->jenis }}</td>
                                    </tr>
                                    @if ($item->metode_pembayaran->nama)
                                        <tr>
                                            <td style="width:140px"></td>
                                            <td></td>
                                            <td>{{ $item->metode_pembayaran->nama . ' - ' . $item->metode_pembayaran->nomor . '(' . $item->metode_pembayaran->pemilik . ')' }}
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td style="width:140px">Detail Pembelian</td>
                                        <td>:</td>
                                        <td>{!! $item->status() !!}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover">
                                    <tr class="bg-primary">
                                        <th class="text-white">Jenis Barang</th>
                                        <th class="text-white">Jumlah</th>
                                        <th class="text-white">Harga Satuan</th>
                                        <th class="text-white">Asuransi Perjalanan</th>
                                        <th class="text-white">Total</th>
                                    </tr>
                                    <tr>
                                        <td>{{ 'Tiket ' . $item->jadwal->armada->jenis_armada }}</td>
                                        <td>{{ $item->detail->count() }}</td>
                                        <td>Rp {{ number_format($item->jadwal->harga_dewasa, 0, '.', '.') }}</td>
                                        <td>Rp
                                            {{ number_format($item->detail()->first()->asuransi_perjalanan * $item->detail->count(), 0, '.', '.') }}
                                        </td>
                                        <td>Rp
                                            {{ number_format($item->detail()->first()->asuransi_perjalanan * $item->detail->count() + $item->detail()->first()->harga_tiket * $item->detail->count(), 0, '.', '.') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            Convencience Fee
                                        </td>
                                        <td>Rp {{ number_format($item->convenience_fee, 0, '.', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            Handling Fee
                                        </td>
                                        <td>Rp {{ number_format($item->handling_fee, 0, '.', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="font-weight-bold text-center">
                                            Total
                                        </td>
                                        <td>Rp {{ number_format($item->total, 0, '.', '.') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('pesanan.index') }}" class="btn btn-danger px-5">Selesai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
