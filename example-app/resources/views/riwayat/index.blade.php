@extends('layout.riwayat')

@section('title', 'Riwayat')

@section('content')
<div class="container">
  <h1>Riwayat</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Aktivitas</th>
        <th>Tanggal</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($riwayat as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->aktivitas }}</td>
          <td>{{ $item->tanggal }}</td>
          <td>{{ $item->deskripsi }}</td>
          <td>
            <a href="{{ url('riwayat/' . $item->id) }}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5" class="text-center">Tidak ada riwayat</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
