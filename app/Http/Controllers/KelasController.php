<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return response()->json($kelas);

        // if(!$kelas){
        //     return response()->json([
        //         'message' => 'data tidak di temukan'
        //     ]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('',[''=> $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'walas_id' => 'required', 
            'bk_id' => 'required'
        ]);
        $input = $request->all();
        Kelas::create($input);
        return redirect('')
        -> with('success','Data Berhasil Di Tambahkan');
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
        $kelas = Kelas::findOrFail($id);
        return view('',[]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelas = Kelas::find($id);
        $request->validate([
            'nama',
            'walas_id',
            'bk_id'
        ]);

        $kelas->update($request->all());
        return redirect('')
        ->with('success','Data Berhasil Di Perbarui');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect('')
        -> with('success','Data Berhasil Di Hapus');

    }
}
