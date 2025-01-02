@extends('layout.stok')

@section('title', 'Stok')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Daftar Stok</h1>

    {{-- Form Tambah Stok --}}
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Tambah Stok</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('stok.store') }}" method="POST">
                @csrf
                {{-- Nama Barang --}}
                <div class="form-group mb-3">
                    <label for="nama_barang">Nama Barang</label>
                    <input 
                        type="text" 
                        name="nama_barang" 
                        id="nama_barang" 
                        class="form-control @error('nama_barang') is-invalid @enderror" 
                        placeholder="Masukkan nama barang" 
                        value="{{ old('nama_barang') }}">
                    @error('nama_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Kualitas Barang --}}
                <div class="form-group mb-3">
                    <label for="kualitas">Kualitas</label>
                    <input 
                        type="text" 
                        name="kualitas" 
                        id="kualitas" 
                        class="form-control @error('kualitas') is-invalid @enderror" 
                        placeholder="Masukkan kualitas barang" 
                        value="{{ old('kualitas') }}">
                    @error('kualitas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Batas Stok --}}
                <div class="form-group mb-3">
                    <label for="batas_stok">Batas Stok</label>
                    <input 
                        type="number" 
                        name="batas_stok" 
                        id="batas_stok" 
                        class="form-control @error('batas_stok') is-invalid @enderror" 
                        placeholder="Masukkan batas stok" 
                        value="{{ old('batas_stok') }}">
                    @error('batas_stok')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah Stok</button>
            </form>
        </div>
    </div>

    {{-- Tabel Daftar Stok --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kualitas</th>
                <th>Batas Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $item)
            <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->kualitas }}</td>
                <td>{{ $item->batas_stok }}</td>
                <td>
                    {{-- Form Update Stok --}}
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#updateStokModal{{ $item->id }}">Update</button>

                    {{-- Modal Update Stok --}}
                    <div class="modal fade" id="updateStokModal{{ $item->id }}" tabindex="-1" aria-labelledby="updateStokModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateStokModalLabel">Update Stok</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('stok.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="nama_barang">Nama Barang</label>
                                            <input 
                                                type="text" 
                                                name="nama_barang" 
                                                id="nama_barang" 
                                                class="form-control" 
                                                value="{{ $item->nama_barang }}" 
                                                required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="kualitas">Kualitas</label>
                                            <input 
                                                type="text" 
                                                name="kualitas" 
                                                id="kualitas" 
                                                class="form-control" 
                                                value="{{ $item->kualitas }}" 
                                                required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="batas_stok">Batas Stok</label>
                                            <input 
                                                type="number" 
                                                name="batas_stok" 
                                                id="batas_stok" 
                                                class="form-control" 
                                                value="{{ $item->batas_stok }}" 
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Form Hapus Stok --}}
                    <form action="{{ route('stok.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(this)">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Konfirmasi Penghapusan --}}
<script>
    function confirmDelete(button) {
        if (confirm('Apakah Anda yakin ingin menghapus stok ini?')) {
            button.closest('form').submit();
        }
    }
</script>
@endsection
