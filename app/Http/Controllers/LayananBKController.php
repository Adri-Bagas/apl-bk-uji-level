<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Foto;
use App\Models\LayananBK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananBKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = LayananBK::all();
        return view('dashboards.pages.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.pages.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'keterangan' => 'required',
            'jenis_layanan' => 'required',
            'foto' => 'required'
        ]);

        $isMultiChild = false;

        if($request->isMultiChild == 'on'){
            $isMultiChild = true;
        }

        $isAllStudent = false;

        if($request->isAllStudent == 'on'){
            $isAllStudent = true;
        }

        $isAvailableToSiswa = false;
        
        if($request->isAvailableToSiswa == 'on') {
            $isAvailableToSiswa = true;
        }

        $isAvailableToGuru = false;

        if($request->isAvailableToGuru == 'on') {
            $isAvailableToGuru = true;
        }

        $isCareerOriented = false;

        if($request->isCareerOriented == 'on'){
            $isCareerOriented = true;
        }

        $store = LayananBK::create([
            'keterangan' => $request->keterangan,
            'jenis_layanan' => $request->jenis_layanan,
            'isMultiChild' => $isMultiChild,
            'isAllStudent' => $isAllStudent,
            'isAvailableToSiswa' => $isAvailableToSiswa,
            'isAvailableToGuru' => $isAvailableToGuru,
            'isCareerOriented' => $isCareerOriented
        ]);
        
        if($request->foto){
            $path = Storage::putFileAs(
                'public/layananBK', $request->file('foto'), $store->id.'.'.$request->foto->getClientOriginalExtension()
            );

            Foto::create([
                'img_location' => 'layananBK/'.$store->id.'.'.$request->foto->getClientOriginalExtension(),
                'model_type' => 'layananBK',
                'model_id' => $store->id
            ]);
        }

        ActivityLog::create([
            'activity' => 'Layanan baru "' .$store->jenis_layanan.'" Di buat oleh '.auth()->user()->name
        ]);

        
        return redirect('/layanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanan = LayananBK::findOrFail($id);
        return view('dashboards.pages.layanan.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = LayananBK::findOrFail($id);
        return view('dashboards.pages.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'keterangan' => 'required',
            'jenis_layanan' => 'required',
        ]);

        $layanan = LayananBK::findOrFail($id);

        $isMultiChild = false;

        if($request->isMultiChild == 'on'){
            $isMultiChild = true;
        }

        $isAllStudent = false;

        if($request->isAllStudent == 'on'){
            $isAllStudent = true;
        }

        $isAvailableToSiswa = false;
        
        if($request->isAvailableToSiswa == 'on') {
            $isAvailableToSiswa = true;
        }

        $isAvailableToGuru = false;

        if($request->isAvailableToGuru == 'on') {
            $isAvailableToGuru = true;
        }

        $isCareerOriented = false;

        if($request->isCareerOriented == 'on'){
            $isCareerOriented = true;
        }

        $layanan->update([
            'keterangan' => $request->keterangan,
            'jenis_layanan' => $request->jenis_layanan,
            'isMultiChild' => $isMultiChild,
            'isAllStudent' => $isAllStudent,
            'isAvailableToSiswa' => $isAvailableToSiswa,
            'isAvailableToGuru' => $isAvailableToGuru,
            'isCareerOriented' => $isCareerOriented
        ]);


        if($request->foto){
            $path = Storage::putFileAs(
                'public/layananBK', $request->file('foto'), $layanan->id.'.'.$request->foto->getClientOriginalExtension()
            );

            if(sizeof($layanan->fotos()) == 0){
                
            Foto::create([
                'img_location' => 'layananBK/'.$layanan->id.'.'.$request->foto->getClientOriginalExtension(),
                'model_type' => 'layananBK',
                'model_id' => $layanan->id
            ]);
            }

            ActivityLog::create([
                'activity' => 'Layanan  "'.$layanan->jenis_layanan.'" Di edit Oleh '.auth()->user()->name
            ]);
        }

        return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = LayananBK::findOrFail($id);

        $layanan->delete();

        return redirect()->route('layanan');
    
    }
}
