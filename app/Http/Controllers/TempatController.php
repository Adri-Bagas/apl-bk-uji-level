<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tempat = Tempat::all();

        return view('ganti nanti', compact('tempat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ganti nanti'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $tempat = Tempat::create([
            'nama' => $request->nama
        ]);

        return redirect('ganti nanti');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tempat = Tempat::find($id);

        return view('ganti nanti', compact('tempat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tempat = Tempat::find($id);

        return view('ganti nanti', compact('tempat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $tempat = Tempat::find($id);

        $tempat->update([
            'nama' => $request->nama
        ]);

        return redirect('ganti nanti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tempat = Tempat::find($id);

        $tempat->delete();

        return redirect('ganti nanti');
    }
}
