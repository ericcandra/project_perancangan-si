@extends('layout.transaksi')

@section('title', 'Tambah Transaksi')

@section('content')
<div class="container">
    <h1>Tambah Transaksi</h1>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="stok_id">Nama Barang</label>
            <select name="stok_id" id="stok_id" class="form-control" required>
                <option value="">Pilih Barang</option>
                @foreach ($stoks as $stok)
                    <option value="{{ $stok->id }}">{{ $stok->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control" min="{{ date('Y-m-d') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="jumlah_total">Jumlah Total</label>
            <input type="number" name="jumlah_total" id="jumlah_total" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection


{{-- @extends('layout.transaksi')

@section('title', 'Tambah Transaksi')

@section('content')
<div class="container">
    <h1>Tambah Transaksi</h1>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="stok_id">Nama Barang</label>
            <select name="stok_id" id="stok_id" class="form-control">
                <option value="">Pilih Barang</option>
                @foreach ($stoks as $stok)
                    <option value="{{ $stok->id }}">{{ $stok->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="jumlah_total">Jumlah Total</label>
            <input type="number" name="jumlah_total" id="jumlah_total" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection --}}
