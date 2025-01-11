{{-- @extends('layout.transaksi')

@section('title', 'Ubah Transaksi')

@section('content')
<div class="container">
    <h1>Ubah Transaksi</h1>
    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="stok_id">Nama Barang</label>
            <select name="stok_id" id="stok_id" class="form-control" required>
                @foreach ($stoks as $stok)
                    <option value="{{ $stok->id }}" {{ $transaksi->stok_id == $stok->id ? 'selected' : '' }}>{{ $stok->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" class="form-control" 
            @if($transaksi->tanggal_transaksi < now()->subDay()->format('Y-m-d')) disabled @endif required>
        </div>
        <div class="form-group mb-3">
            <label for="jumlah_total">Jumlah Total</label>
            <input type="number" name="jumlah_total" id="jumlah_total" value="{{ $transaksi->jumlah_total }}" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ $transaksi->harga }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection --}}


@extends('layout.transaksi')

@section('title', 'Ubah Transaksi')

@section('content')
<div class="container">
    <h1>Ubah Transaksi</h1>
    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="stok_id">Nama Barang</label>
            <select name="stok_id" id="stok_id" class="form-control">
                @foreach ($stoks as $stok)
                    <option value="{{ $stok->id }}" {{ $transaksi->stok_id == $stok->id ? 'selected' : '' }}>{{ $stok->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" class="form-control">
            @if($transaksi->tanggal_transaksi < now()->subDay()->format('Y-m-d')) disabled @endif required>
        </div>
        <div class="form-group mb-3">
            <label for="jumlah_total">Jumlah Total</label>
            <input type="number" name="jumlah_total" id="jumlah_total" value="{{ $transaksi->jumlah_total }}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ $transaksi->harga }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection