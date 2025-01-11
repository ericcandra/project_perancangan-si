@extends('layout.riwayat')

@section('content')
<h1>Tambah Riwayat</h1>
<form action="{{ route('riwayat.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="aktivitas">Aktivitas:</label>
        <input type="text" id="aktivitas" name="aktivitas" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="transaksi_id">Transaksi Terkait (Opsional):</label>
        <select id="transaksi_id" name="transaksi_id" class="form-control">
            <option value="">Pilih Transaksi</option>
            @foreach ($transaksis as $transaksi)
                <option value="{{ $transaksi->id }}">{{ $transaksi->nama_transaksi }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="stok_id">Stok Terkait (Opsional):</label>
        <select id="stok_id" name="stok_id" class="form-control">
            <option value="">Pilih Stok</option>
            @foreach ($stoks as $stok)
                <option value="{{ $stok->id }}">{{ $stok->nama_barang }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
