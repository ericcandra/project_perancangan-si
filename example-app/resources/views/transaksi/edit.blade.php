@extends('layout.transaksi')

@section('title','transaksi')

@section('content')
<div class="row">
    formulir tambah transaksi
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah transaksi</h4>
            <p class="card-description">
              Formulir Transaksi
            </p>
            <form method="POST" action="{{ route('transaksi.update',$stok['id'])}}" class ="forms-sample">
            @method('put')
            @csrf
              <div class="form-group">
                <label for="nama">tanggal transaksi</label>
                <input type="date" class="form-control" name="tanggal_transaksi" placeholder="">
              </div>

              <div class="form-group">
                <label for="nama">jumlah total</label>
                <input type="text" class="form-control" name="jumlah_total" placeholder="">
              </div>
              {{-- <div class="form-group">
                <label for="nama">Batas Stok</label>
                <input type="text" class="form-control" name="batas_stok" placeholder="">
              </div> --}}
              
              {{-- <div class="form-group">
                <label for="text">kode_buku</label>
                <select name="buku_id" class="form-control">
                    @foreach ($buku as $item)
                        <option value={{$item['id']}}>
                            {{$item['kode_buku']}}
                        </option>
                    @endforeach
                </select>
                @error('buku_id')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
              </div> --}}
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ url('transaksi')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
</div> 
@endsection