<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alat = Alat::paginate(5); // Mengambil 5 isi tabel
        return view('alat', compact('alat'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        $kategori = Kategori::all();
        return view('alat.create',['jenis' => $jenis, 'kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required',
            'id_kategori' => 'required',
            'id_jenis' => 'required',
            'nama_alat' => 'required',
            'foto_alat' => 'required',
            'merk_alat' => 'required',
            'stok_alat' => 'required',
        ]);

        // fungsi eloquent untuk nambah data Alat
        $alats = new Alat();
        $alats -> id_alat = $request->get('id_alat');
        $alats -> nama_alat = $request->get('nama_alat');
        $alats -> foto_alat = $request->get('foto_alat');
        $alats -> merk_alat = $request->get('merk_alat');
        $alats -> stok_alat = $request->get('stok_alat');

        // bikin fungsi eloquent supaya bisa memanggil db kategori untuk menambah data dengan relasi belongsto
        $kategori =  new Kategori;
        $kategori->id_kategori = $request->get('id_kategori');
        // bikin fungsi eloquent supaya bisa memanggil db jenis
        $jenis = new Jenis;
        $jenis->id_jenis = $request->get('id_jenis');

        $alats->jenis()->associate($jenis);
        $alats->kategori()->associate($kategori);
        $alats->save();

        return redirect()->route('alat.index')->with('success', 'Alat Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_alat)
    {
        $alat = Alat::find($id_alat);
        return view('alat.detail', compact('alat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_alat)
    {
        $alat = Alat::find($id_alat);
        $jenis = Jenis::all();
        $kategori = Kategori::all();
        return view('alat.edit', compact('alat','kategori','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_alat)
    {
        $request->validate([
            'id_alat' => 'required',
            'id_kategori' => 'required',
            'id_jenis' => 'required',
            'nama_alat' => 'required',
            'foto_alat' => 'required',
            'merk_alat' => 'required',
            'stok_alat' => 'required',
        ]);

        // fungsi eloquent untuk nambah data Alat
        $alats = Alat::with(['kategori','jenis'])->where('id_alat',$id_alat)->first();
        $alats -> id_alat = $request->get('id_alat');
        $alats -> nama_alat = $request->get('nama_alat');
        $alats -> foto_alat = $request->get('foto_alat');
        $alats -> merk_alat = $request->get('merk_alat');
        $alats -> stok_alat = $request->get('stok_alat');

        // bikin fungsi eloquent supaya bisa memanggil db kategori untuk menambah data dengan relasi belongsto
        $kategori =  new Kategori;
        $kategori->id_kategori = $request->get('id_kategori');
        // bikin fungsi eloquent supaya bisa memanggil db jenis
        $jenis = new Jenis;
        $jenis->id_jenis = $request->get('id_jenis');

        $alats->jenis()->associate($jenis);
        $alats->kategori()->associate($kategori);
        $alats->save();

        return redirect()->route('alat.index')->with('success', 'peminjam Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_alat)
    {
        Alat::find($id_alat)->delete();
        return redirect()->route('alat.index')->with('success', 'Alat Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $mahasiswas = Mahasiswa::where('nama_alat', 'like', '%' . $keyword . '%')->paginate(5);
        return view('alat.index', compact('alat'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
