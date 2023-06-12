<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\LayananBK;
use Illuminate\Http\Request;

class LayananBKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = LayananBK::all();
        return view('layananBK');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layananBK.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'jenis_layanan' => 'required',
            'isMultiChild' => 'required',
            'isCareerOriented' => 'required'
        ]);

        $isMultiChild = false;

        if($request->isMultiChild == 'ON'){
            $isMultiChild = true;
        }

        $isCareerOriented = false;

        if($request->isCareerOriented == 'ON'){
            $isCareerOriented = true;
        }

        $store = LayananBK::create([
            'jenis_layanan' => $request->jenis_layanan,
            'isMultiChild' => $isMultiChild,
            'isCareerOriented' => $isCareerOriented
        ]);

        ActivityLog::create([
            'activity' => 'Layanan baru "' .$store->jenis_layanan.'" Di buat oleh '.auth()->user()->name
        ]);

        redirect('ganti nanti');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanan = LayananBK::findOrFail($id);
        return view('layananBK', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = LayananBK::findOrFail($id);
        return view('layananBK', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'jenis_layanan' => 'required',
            'isMultiChild' => 'required',
            'isCareerOriented' => 'required'
        ]);

        $layanan = LayananBK::findOrFail($id);

        $isMultiChild = false;

        if($request->isMultiChild == 'ON'){
            $isMultiChild = true;
        }

        $isCareerOriented = false;

        if($request->isCareerOriented == 'ON'){
            $isCareerOriented = true;
        }

        $layanan->update([
            'jenis_layanan' => $request->jenis_layanan,
            'isMultiChild' => $isMultiChild,
            'isCareerOriented' => $isCareerOriented
        ]);

        redirect('ganti nanti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = LayananBK::findOrFail($id);

        $layanan->delete();

        redirect('ganti nanti');
    }
}
