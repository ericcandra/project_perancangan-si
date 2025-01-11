@extends('layout.riwayat')

@section('content')
<h1>Daftar Riwayat</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahRiwayatModal">Tambah Riwayat</button>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Aktivitas</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Transaksi</th>
            <th>Stok</th>
            <th>Dibuat Pada</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($riwayats as $riwayat)
        <tr>
            <td>{{ $riwayat->aktivitas }}</td>
            <td>{{ $riwayat->tanggal }}</td>
            <td>{{ $riwayat->deskripsi ?? '-' }}</td>
            <td>
                @if ($riwayat->transaksi)
                    ID: {{ $riwayat->transaksi->id }}<br>
                    Nama: {{ $riwayat->transaksi->nama_transaksi ?? 'Tidak ada data' }}
                @else
                    Tidak ada transaksi
                @endif
            </td>
            <td>
                @if ($riwayat->stok)
                    ID: {{ $riwayat->stok->id }}<br>
                    Nama: {{ $riwayat->stok->nama_barang ?? 'Tidak ada data' }}
                @else
                    Tidak ada stok
                @endif
            </td>
            <td>{{ $riwayat->created_at->format('d-m-Y H:i') }}</td>
            <td>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editRiwayatModal-{{ $riwayat->id }}">Ubah</button>
                <form action="{{ route('riwayat.destroy', $riwayat->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Tidak ada riwayat tersedia.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
