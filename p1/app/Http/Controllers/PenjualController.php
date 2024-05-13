<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;


class PenjualController extends Controller
{
    public function index()
    {
        $penjual = Penjual::all();

        return view('penjual.dashboard', compact('penjual'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
