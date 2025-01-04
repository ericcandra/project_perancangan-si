@extends('layout.notifikasi')

@section('content')
<h1>Detail Notifikasi</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Judul: {{ $notifikasi->judul }}</h5>
        <p class="card-text">Isi: {{ $notifikasi->isi }}</p>
        <p class="card-text">Status: {{ $notifikasi->status ? 'Sudah Dibaca' : 'Belum Dibaca' }}</p>
        <p class="card-text">Waktu: {{ $notifikasi->created_at }}</p>
    </div>
</div>
<a href="{{ route('notifikasi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
