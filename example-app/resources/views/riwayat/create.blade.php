@extends('layout.riwayat')

@section('content')
<h1>Tambah Riwayat</h1>
<form action="{{ route('riwayat.store') }}" method="POST">
    @csrf
    <div>
        <label for="aktivitas">Aktivitas:</label>
        <input type="text" id="aktivitas" name="aktivitas" required>
    </div>
    <div>
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>
    </div>
    <div>
        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi"></textarea>
    </div>
    <div>
        <label for="Transaksi_id">Transaksi Terkait (Opsional):</label>
        <input type="number" id="Transaksi_id" name="Transaksi_id">
    </div>
    <div>
        <label for="stok_id">Stok Terkait (Opsional):</label>
        <input type="number" id="stok_id" name="stok_id">
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection
