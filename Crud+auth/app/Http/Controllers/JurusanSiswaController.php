<?php

namespace App\Http\Controllers;

use App\Models\JurusanSiswa;
use Illuminate\Http\Request;

class JurusanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $jurusan;
    public function __construct()
    {
        $this->jurusan = new JurusanSiswa();
    }
    public function index()
    {
        $jurusan = JurusanSiswa::all();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'jurusan' => 'required|max:50',
        ];
        $validate = [
            'required' => 'Harus diisi!!',
            'max' => 'maksimal hanya 50 karakter!',
        ];
        $request->validate($rules, $validate);

        $this->jurusan->nama_jurusan = $request->jurusan;
        $this->jurusan->save();
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JurusanSiswa $jurusanSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = JurusanSiswa::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = JurusanSiswa::findOrFail($id);
        $update->nama_jurusan = $request->jurusan;
        if ($update->isDirty()) {

            $rules = [
                'jurusan' => 'required|max:50',
            ];
            $validate = [
                'required' => 'Harus diisi!!',
                'max' => 'maksimal hanya 50 karakter!',
            ];
            $request->validate(
                $rules,
                $validate
            );
            $update->save();
            return redirect()->route('jurusan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = JurusanSiswa::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index');
    }
}
