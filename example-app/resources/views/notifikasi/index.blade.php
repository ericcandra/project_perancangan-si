@extends('layout.notifikasi')

@section('title', 'Notifikasi')

@section('content')
<div class="container">
  <h1>Notifikasi</h1>
  <ul class="list-group">
    @forelse ($notifikasi as $item)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
          <h5>{{ $item->judul }}</h5>
          <p>{{ $item->pesan }}</p>
        </div>
        <span class="badge {{ $item->status == 'unread' ? 'bg-danger' : 'bg-success' }}">
          {{ $item->status }}
        </span>
      </li>
    @empty
      <li class="list-group-item">Tidak ada notifikasi</li>
    @endforelse
  </ul>
</div>
@endsection
