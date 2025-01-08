@extends('layout.notifikasi')

@section('content')
<h1>Daftar Notifikasi</h1>

<!-- Pesan Sukses -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Tombol Tambah -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahNotifikasiModal">Tambah Notifikasi</button>

<!-- Tabel Notifikasi -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Status</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($notifikasis as $notifikasi)
        <tr>
            <td>{{ $notifikasi->judul }}</td>
            <td>{{ $notifikasi->pesan }}</td>
            <td>{{ $notifikasi->dibaca ? 'Sudah Dibaca' : 'Belum Dibaca' }}</td>
            <td>{{ $notifikasi->created_at->format('d-m-Y H:i') }}</td>
            <td>
                <!-- Tombol Ubah -->
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editNotifikasiModal-{{ $notifikasi->id }}">Ubah</button>

                <!-- Form Hapus -->
                <form action="{{ route('notifikasi.destroy', $notifikasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus transaksi ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>

        <!-- Modal Ubah -->
        <div class="modal fade" id="editNotifikasiModal-{{ $notifikasi->id }}" tabindex="-1" aria-labelledby="editNotifikasiModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('notifikasi.update', $notifikasi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Notifikasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="judul-{{ $notifikasi->id }}" class="form-label">Judul:</label>
                                <input type="text" id="judul-{{ $notifikasi->id }}" name="judul" class="form-control" value="{{ $notifikasi->judul }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesan-{{ $notifikasi->id }}" class="form-label">Isi:</label>
                                <textarea id="pesan-{{ $notifikasi->id }}" name="pesan" class="form-control" required>{{ $notifikasi->pesan }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <tr>
            <td colspan="5" class="text-center">Tidak ada notifikasi.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahNotifikasiModal" tabindex="-1" aria-labelledby="tambahNotifikasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('notifikasi.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul:</label>
                        <input type="text" id="judul" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Isi:</label>
                        <textarea id="pesan" name="pesan" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
