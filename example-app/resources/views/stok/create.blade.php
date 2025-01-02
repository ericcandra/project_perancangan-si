@extends('layout.stok')

@section('title','Tambah Stok')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Stok</h4>
                <p class="card-description">
                    Formulir tambah stok barang
                </p>
                <form method="POST" action="{{ route('stok.store')}}" class="forms-sample">
                    @csrf
                    {{-- Nama Barang --}}
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input 
                            type="text" 
                            class="form-control @error('nama_barang') is-invalid @enderror" 
                            name="nama_barang" 
                            placeholder="Masukkan nama barang" 
                            value="{{ old('nama_barang') }}">
                        @error('nama_barang')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Kualitas --}}
                    <div class="form-group">
                        <label for="kualitas">Kualitas</label>
                        <input 
                            type="text" 
                            class="form-control @error('kualitas') is-invalid @enderror" 
                            name="kualitas" 
                            placeholder="Masukkan kualitas barang" 
                            value="{{ old('kualitas') }}">
                        @error('kualitas')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Batas Stok --}}
                    <div class="form-group">
                        <label for="batas_stok">Batas Stok</label>
                        <input 
                            type="text" 
                            class="form-control @error('batas_stok') is-invalid @enderror" 
                            name="batas_stok" 
                            placeholder="Masukkan batas stok" 
                            value="{{ old('batas_stok') }}">
                        @error('batas_stok')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ route('stok.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
