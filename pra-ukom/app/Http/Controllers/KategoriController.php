<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $kategori;
    public function __construct()
    {
        $this->kategori = new Kategori();
    }
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.table', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_kategori' => 'required',
        ];
        $messages = [
            'required' => 'harus diisi'
        ];

        $request->validate($rules, $messages);

        $this->kategori->nama_kategori = $request->nama_kategori;
        $this->kategori->save();
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updated = Kategori::findOrFail($id);
        $updated->nama_kategori = $request->nama_kategori;
        if ($updated->isDirty()) {
            $rules = [
                'nama_kategori' => 'required',
            ];
            $messages = [
                'required' => 'harus diisi'
            ];

            $request->validate($rules, $messages);

            $updated->nama_kategori = $request->nama_kategori;
            $updated->save();
            return redirect()->route('kategori.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Kategori::findOrFail($id);
        $delete->delete();
        // dd($delete);
        return redirect()->route('kategori.index');
    }
}
