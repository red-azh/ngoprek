<?php

namespace App\Http\Controllers;

use App\Models\JurusanSiswa;
use App\Models\ListSiswa;
use Illuminate\Http\Request;

class ListSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $list_siswa;
    public function __construct()
    {
        $this->list_siswa = new ListSiswa();
    }
    public function index()
    {
        $list = ListSiswa::all();
        return view('list.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = JurusanSiswa::all();
        return view('list.create', compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $gambar = $request->image;
        // $namaFile = time() . rand(100, 99) . "." . $gambar->getClientOriginalExtension();
        // $gambar->move(public_path() . "/upload", $namaFile);


        $rules = [
            'nama' => 'required',
            'umur' => 'required',
            'jurusan' => 'required',
            'asal_sekolah' => 'min:3',
            'image' => 'image|file|max:1024',
        ];
        $validate = [
            'required' => 'Harus diisi!!',
            'min' => 'minimal 3 huruf'

        ];
        $gambar = $request->file('image')->store('gambars');

        $request->validate($rules, $validate);
        $this->list_siswa->nama = $request->nama;
        $this->list_siswa->umur = $request->umur;
        $this->list_siswa->asal_sekolah = $request->asal_sekolah;
        $this->list_siswa->jurusan_id = $request->jurusan;
        $this->list_siswa->foto = $gambar;
        $this->list_siswa->save();
        return redirect()->route('list.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $list = ListSiswa::findOrFail($id);
        return view('list.show', compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $list = ListSiswa::findOrFail($id);
        $jurusan = JurusanSiswa::all();
        return view('list.edit', compact('list', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $gambar = $request->file('image')->store('gambars');

        $update = ListSiswa::findOrFail($id);
        $update->nama = $request->nama;
        $update->umur = $request->umur;
        $update->asal_sekolah = $request->asal_sekolah;
        $update->jurusan_id = $request->jurusan;
        $update->foto = $gambar;
        if ($update->isDirty()) {

            $rules = [
                'nama' => 'required',
                'umur' => 'required',
                'jurusan' => 'required',
                'asal_sekolah' => 'min:3',
                'image' => 'image|file|max:1024',
            ];
            $validate = [
                'required' => 'Harus diisi!!',
                'min' => 'minimal 3 huruf'

            ];

            $update->nama = $request->nama;
            $update->umur = $request->umur;
            $update->asal_sekolah = $request->asal_sekolah;
            $update->jurusan_id = $request->jurusan;
            $update->foto = $gambar;
            $request->validate($rules, $validate);
            $update->save();
        }
        return redirect()->route('list.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = ListSiswa::findOrFail($id);
        $delete->delete();
        return redirect()->route('list.index');
    }
}
