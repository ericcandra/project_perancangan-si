@extends('layout.stok')

@section('title', 'Edit Stok')

@section('content')
<div class="container">
    <h1>Edit Stok</h1>
    <form method="POST" action="{{ route('stok.update', $stok->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $stok->nama_barang }}" required>
        </div>
        <div class="mb-3">
            <label for="kualitas" class="form-label">Kualitas</label>
            <input type="text" name="kualitas" class="form-control" value="{{ $stok->kualitas }}" required>
        </div>
        <div class="mb-3">
            <label for="batas_stok" class="form-label">Batas Stok</label>
            <input type="number" name="batas_stok" class="form-control" value="{{ $stok->batas_stok }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('stok.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
