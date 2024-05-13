<?php

namespace App\Http\Controllers;

use App\Models\DaftarIsi;
use Illuminate\Http\Request;

class DaftarIsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarIsi = DaftarIsi::all();
        return view('daftarIsi.dashboard', compact('daftarIsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarIsi $daftarIsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarIsi $daftarIsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarIsi $daftarIsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarIsi $daftarIsi)
    {
        //
    }
}
