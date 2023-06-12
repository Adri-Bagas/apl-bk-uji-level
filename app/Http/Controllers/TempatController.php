<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
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

        return view('dashboards.pages.tempat.index', compact('tempat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.pages.tempat.create'); 
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

        ActivityLog::create([
            'activity' => 'Tempat Baru "'.$tempat->nama.'" Di tambahkan Oleh '.auth()->user()->name
        ]);


        return redirect('tempat');
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

        return view('dashboards.pages.tempat.edit', compact('tempat'));
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

        ActivityLog::create([
            'activity' => 'Tempat  "'.$tempat->nama.'" Di edit Oleh '.auth()->user()->name
        ]);

        return redirect('/tempat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tempat = Tempat::find($id);

        $tempat->delete();


        ActivityLog::create([
            'activity' => 'Tempat  "'.$tempat->nama.'" Di Hapus Oleh '.auth()->user()->name
        ]);

        return redirect('/tempat');
    }
}
