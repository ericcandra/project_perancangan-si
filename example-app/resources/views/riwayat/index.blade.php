@extends('layout.riwayat')

@section('content')
<h1>Daftar Riwayat</h1>

<!-- Pesan Sukses -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Tombol Tambah -->
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
            <td>{{ $riwayat->transaksi ? 'ID Transaksi: ' . $riwayat->transaksi->id : 'Tidak ada transaksi' }}</td>
            <td>{{ $riwayat->stok ? 'ID Stok: ' . $riwayat->stok->id : 'Tidak ada stok' }}</td>
            <td>{{ $riwayat->created_at->format('d-m-Y H:i') }}</td>
            <td>
                <!-- Tombol Ubah -->
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editRiwayatModal-{{ $riwayat->id }}">Ubah</button>

                <!-- Form Hapus -->
                <form action="{{ route('riwayat.destroy', $riwayat->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>

        <!-- Modal Ubah -->
        <div class="modal fade" id="editRiwayatModal-{{ $riwayat->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('riwayat.update', $riwayat->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Riwayat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="aktivitas">Aktivitas:</label>
                                <input type="text" id="aktivitas" name="aktivitas" class="form-control" value="{{ $riwayat->aktivitas }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $riwayat->tanggal }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $riwayat->deskripsi }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="transaksi_id">Transaksi Terkait (Opsional):</label>
                                <input type="number" id="transaksi_id" name="transaksi_id" class="form-control" value="{{ $riwayat->transaksi_id }}">
                            </div>
                            <div class="mb-3">
                                <label for="stok_id">Stok Terkait (Opsional):</label>
                                <input type="number" id="stok_id" name="stok_id" class="form-control" value="{{ $riwayat->stok_id }}">
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
            <td colspan="7" class="text-center">Tidak ada riwayat tersedia.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahRiwayatModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('riwayat.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Riwayat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="aktivitas">Aktivitas:</label>
                        <input type="text" id="aktivitas" name="aktivitas" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="transaksi_id">Transaksi Terkait (Opsional):</label>
                        <input type="number" id="transaksi_id" name="transaksi_id" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="stok_id">Stok Terkait (Opsional):</label>
                        <input type="number" id="stok_id" name="stok_id" class="form-control">
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
