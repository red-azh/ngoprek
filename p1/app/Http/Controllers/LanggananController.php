<?php

namespace App\Http\Controllers;

use App\Models\Langganan;
use Illuminate\Http\Request;

class LanggananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langganan = Langganan::all();
        return view('langganan.dashboard', compact('langganan'));
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
    public function show(Langganan $langganan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Langganan $langganan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Langganan $langganan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Langganan $langganan)
    {
        //
    }
}
