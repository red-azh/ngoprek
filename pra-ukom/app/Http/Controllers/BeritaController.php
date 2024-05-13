<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $berita;
    public function __construct()
    {
        $this->berita = new Berita();
    }

    public function index(Request $request)
    {
        // $cari = $request->cari;
        // $lihat = Berita::where('judul', 'LIKE', "%$cari%")->paginate(2);
        $berita = Berita::all();
        return view('berita.table', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required|max:100|min:3',
            'deskripsi' => 'required|min:3|max:1000',
            'kategori_id' => 'required',
        ];
        $messages = [
            'required' => 'isiin',
            'max.judul' => '100 biji',
            'max.deskripsi' => '1000 biji',

            'min' => 'minimal 3',
        ];
        $request->validate($rules, $messages);
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->kategori_id = $request->kategori_id;
        $berita->save();
        Alert::success('Success', 'Berhasil Tambah data');
        return redirect()->route('berita.index');
        // Berita::created([
        //     'judul' => $request->judul,
        //     'deskripsi' => $request->deskripsi,
        //     'kategori_id' => $request->kategori_id,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = kategori::all();
        return view('berita.edit', compact('berita', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $updated = Berita::findOrFail($id);
        $updated->judul = $request->judul;
        $updated->deskripsi = $request->deskripsi;
        $updated->kategori_id = $request->kategori_id;
        if ($updated->isDirty()) {
            $rules = [
                'judul' => 'required|min:3|max:100',
                'deskripsi' => 'required|min:3|max:1000',
                'kategori_id' => 'required|',
            ];
            $messages = [
                'required' => ':attribute harus diisi',
                'max.deskripsi' => ':atribute max 1000 kata',

            ];
            $request->validate($rules, $messages);
            $updated->judul = $request->judul;
            $updated->deskripsi = $request->deskripsi;
            $updated->kategori_id = $request->kategori_id;
            $updated->save();
            Alert::info('Success', 'Berhasil Mengubah data');
            return redirect()->route('berita.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Berita::findOrFail($id);
        $delete->delete();
        Alert::warning('Data dihapus    ', 'Anda Menghapus Satu data');

        return redirect()->route('berita.index');
    }
}
