<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HasilKerawanan;
use App\Models\JenisKerawanan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetakerawananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function createHasil($id){
        $siswa = Siswa::find($id);
        return view('dashboards.pages.petakerawanan.catatHasil',compact('siswa'));
    }
    public function storeHasil(Request $request, $id){
        $validate = $request->validate([
            'hasil' => 'required'
        ]);

        $siswa = Siswa::find($id);
        if($siswa->hasilKerawanan){
            $siswa->hasilKerawanan->update([
                'hasil' => $request->hasil,
            ]);
        }else{
            HasilKerawanan::create([
                'siswa_id' => $id,
                'hasil' => $request->hasil,
            ]);
        }
        

        return redirect('/siswa/'.$id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($idSiswa)
    {
        $jeniskerawanan = JenisKerawanan::all();
        $siswa = Siswa::find($idSiswa);

        $arrayData = [];
        foreach($siswa->kerawanans as $item){
            array_push($arrayData, $item->id);
        }

        return view('dashboards.pages.petakerawanan.create',compact('jeniskerawanan', 'siswa', 'arrayData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $validate = $request->validate([
            'jeniskerawanan_id'=> 'required'
        ]);
        
        DB::table('siswa_kerawanan')->where('siswa_id', $id)->delete();

        foreach($request->jeniskerawanan_id as $item){
            DB::table('siswa_kerawanan')->insert([
                'siswa_id' => $id,
                'jenis_kerawanan_id' => $item
            ]);
        }

        return redirect('/siswa/'.$id);
        
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
