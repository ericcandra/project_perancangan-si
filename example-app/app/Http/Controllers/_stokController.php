<?php

namespace App\Http\Controllers;

use App\Models\_stok;


use Illuminate\Http\Request;


class _stokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if(auth()->user()->role == 'D'){
        //     $mahasiswa = Anggota::where('user_id', auth()->user()->id)->get();
        // }else{
        //     $mahasiswa = Anggota::all();
        // }
        $_stok = _stok::all();
        return view('_stok.index')
            ->with('_stok',$_stok);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $anggota = anggota::all();
        return view('_stok.create');
        // ->with('buku',$anggota);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', _stok::class)){
            abort(403);
        }
        // return($request);
        // validasi form
        $val = $request->validate([
            'nama_barang'=>"required|unique:_stok",
            'kualitas'=>"required",
            'batas_stok'=>"required",
            // 'buku_id'=>'required'
        ]);

        // return $val;
        // $ext = $request->url_foto->getClientOriginalExtension();
        
        // rename misal : npm.extense
        // $val['url_foto'] = $request->npm.".".$ext;

        // // upload ke tabel mahasiswa
        // $request->url_foto->move('foto',$val['url_foto']);

        // simpan ke tabel fakultas
        _stok::create($val);

        // redirect ke halaman list fakultas
        return redirect()->route('_stok.index')->with('success',$val['nama_barang'].'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(_stok $_stok)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(_stok $_stok)
    {
        $_stok = _stok::all(); 
        return view('_stok.edit')
        ->with('_stok',$_stok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, _stok $_stok)
    {
        // if (auth()->user()->cannot('update', $anggota)){
        //     abort(403);
        // }
        // // dd($request);
        if($request->nama_barang) {
            $val = $request->validate([
                // 'id'=> 'required',
                // 'npm'=>'required',
                'nama_barang'=>"required|unique:_stok",
                'kualitas'=>'required',
                'batas_stok'=>'required',
            
                // 'url_foto' => 'Required|file|mimes:png,jpg|max:10000',
                // 'prodi_id' => 'required'
            ]);
    
        } else {
            $val = $request->validate([
                // 'id'=> 'required',
                // 'npm'=>'required',
                'nama_barang'=>"required|unique:_stok",
                // 'nama_buku'=>'required',
                'kualitas'=>'required',
                'batas_stok'=>'required',
            ]);
            // ekstenso file yang di upload
        // $ext = $request->id->getClientOriginalExtension();
        
        // // rename misal : npm.extense
        // $val['kode_buku'] = $request->npm.".".$ext;

        // // upload ke tabel mahasiswa
        // $request->kode_buku->move('kode_buku',$val['kode_buku']);
    
        }

        // simpan ke tabel mahasiswa
        _stok::where('id',$_stok['id'])->update($val);

        // redirect ke halaman list fakultas
        return redirect()->route('_stok.index')->with('success',$val['nama_barang'].'berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(_stok $_stok)
    {
        // if (auth()->user()->cannot('delete', $_stok)){
        //     abort(403);
        // }
        // dd($mahasiswa);
        
        $_stok->delete();
        return redirect()->route('_stok.index')->with('success',' berhasil dihapus.');
    }
}
