<?php

namespace App\Http\Controllers;

use App\Models\stok;
// use App\Models\buku;
// use App\Models\Petugas;
// use App\Models\pinjam;
use Illuminate\Http\Request;


class stokController extends Controller
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
        $stok = stok::all();
        return view('stok.index')
            ->with('stok',$stok);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $anggota = anggota::all();
        return view('stok.create');
        // ->with('buku',$anggota);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', stok::class)){
            abort(403);
        }
        // return($request);
        // validasi form
        $val = $request->validate([
            'nama_barang'=>"required|unique:stoks",
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
        stok::create($val);

        // redirect ke halaman list fakultas
        return redirect()->route('stok.index')->with('success',$val['nama_barang'].'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(stok $stok)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stok $stok)
    {
        $stok = stok::all(); 
        return view('stok.edit')
        ->with('stok',$stok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stok $stok)
    {
        // if (auth()->user()->cannot('update', $anggota)){
        //     abort(403);
        // }
        // // dd($request);
        if($request->nama_barang) {
            $val = $request->validate([
                // 'id'=> 'required',
                // 'npm'=>'required',
                'nama_barang'=>"required|unique:stoks",
                'kualitas'=>'required',
                'batas_stok'=>'required',
            
                // 'url_foto' => 'Required|file|mimes:png,jpg|max:10000',
                // 'prodi_id' => 'required'
            ]);
    
        } else {
            $val = $request->validate([
                // 'id'=> 'required',
                // 'npm'=>'required',
                'nama_barang'=>"required|unique:stoks",
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
        stok::where('id',$stok['id'])->update($val);

        // redirect ke halaman list fakultas
        return redirect()->route('stok.index')->with('success',$val['nama_barang'].'berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(stok $stok)
    // {
    //     if (auth()->user()->cannot('delete', $stok)){
    //         abort(403);
    //     }
    //     // dd($mahasiswa);
        
    //     $stok->delete();
    //     return redirect()->route('.index')->with('success',' berhasil dihapus.');
    // }
};
