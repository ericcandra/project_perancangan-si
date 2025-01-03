@extends('layout.transaksi')

@section('title', 'Daftar Transaksi')

@section('content')
<div class="container">
    <h1>Daftar Transaksi</h1>
    
    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Tambah Transaksi -->
    <form action="{{ route('transaksi.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <select class="form-control @error('stok_id') is-invalid @enderror" name="stok_id" required>
                    <option value="">Pilih Barang</option>
                    @foreach ($stoks as $stok)
                        <option value="{{ $stok->id }}" {{ old('stok_id') == $stok->id ? 'selected' : '' }}>
                            {{ $stok->nama_barang }}
                        </option>
                    @endforeach
                </select>
                @error('stok_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}" required>
                @error('tanggal_transaksi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="number" class="form-control @error('jumlah_total') is-invalid @enderror" name="jumlah_total" placeholder="Jumlah Total" value="{{ old('jumlah_total') }}" required>
                @error('jumlah_total')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-2">
                <input type="number" step="0.01" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="Harga" value="{{ old('harga') }}" required>
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>

    <!-- Tabel Daftar Transaksi -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Tanggal Transaksi</th>
                <th>Jumlah Total</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
                <tr>
                    <!-- Form Edit Inline -->
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" class="d-flex">
                        @csrf
                        @method('PUT')
                        <td>
                            <select class="form-control" name="stok_id" required>
                                @foreach ($stoks as $stok)
                                    <option value="{{ $stok->id }}" {{ $stok->id == $transaksi->stok_id ? 'selected' : '' }}>
                                        {{ $stok->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" required>
                        </td>
                        <td>
                            <input type="number" class="form-control" name="jumlah_total" value="{{ $transaksi->jumlah_total }}" required>
                        </td>
                        <td>
                            <input type="number" step="0.01" class="form-control" name="harga" value="{{ $transaksi->harga }}" required>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
                    </form>
                            <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus transaksi ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
