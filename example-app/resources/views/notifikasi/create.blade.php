@extends('layout.notifikasi')

@section('content')
<h1>Tambah Notifikasi</h1>
<form action="{{ route('Notifikasi.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="judul" class="form-label">Judul:</label>
        <input type="text" id="judul" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="pesan" class="form-label">Pesan:</label>
        <textarea id="isi" name="isi" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
