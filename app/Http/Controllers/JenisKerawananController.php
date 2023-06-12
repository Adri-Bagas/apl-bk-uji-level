<?php

namespace App\Http\Controllers;

use App\Models\JenisKerawanan;
use Illuminate\Http\Request;

class JenisKerawananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = JenisKerawanan::all();

        return view('dashboards.pages.jeniskerawanan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('dashboards.pages.jeniskerawanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'jenis_kerawanan' => 'required'
        ]);

        $jenisKerawanan = JenisKerawanan::create([
            'jenis_kerawanan' => $request->jenis_kerawanan
        ]);

        return redirect('jeniskerawanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenisKerawanan = JenisKerawanan::find($id);
        return view('ganti nanti', compact('jenisKerawanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rawan = JenisKerawanan::find($id);
        return view('dashboards.pages.jeniskerawanan.edit', compact('rawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'jenis_kerawanan' => 'required'
        ]);

        $jenisKerawanan = JenisKerawanan::find($id);

        $jenisKerawanan->update([
            'jenis_kerawanan' => $request->jenis_kerawanan
        ]);

        return redirect('jeniskerawanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenisKerawanan = JenisKerawanan::find($id);

        $jenisKerawanan->delete();

        return redirect('jeniskerawanan');
    }
}
