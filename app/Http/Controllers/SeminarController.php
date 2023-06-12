<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Seminar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seminars = Seminar::all();

        return view('ganti nanti', compact('seminar'));
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
        $request->validate([
            'tanggal_seminar' => 'required',
            'waktu_seminar' => 'required',
            'judul_seminar' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required'
        ]);

        $seminar = Seminar::create([
            'tanggal_seminar' => $request->tanggal_seminar,
            'waktu_seminar' => $request->waktu_seminar,
            'judul_seminar' => $request->judul_seminar,
            'penyelenggara' => $request->penyelenggara,
            'keterangan' => $request->keterangan
        ]);

        if($request->foto){
            foreach($request->foto as $key => $foto){

                $randName = Str::random(10);
                $path = Storage::putFileAs(
                    'public/seminar', $foto, $seminar->id.$randName.'.'.$foto->getClientOriginalExtension()
                );
    
                Foto::create([
                    'img_location' => 'seminar/'.$seminar->id.$randName.'.'.$foto->getClientOriginalExtension(),
                    'model_type' => 'siswa',
                    'model_id' => $seminar->id
                ]);
            }
        }

        return redirect('ganti nanti');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seminar = Seminar::find($id);
        return view('ganti nanti', compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seminar = Seminar::find($id);
        return view('ganti nanti', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal_seminar' => 'required',
            'waktu_seminar' => 'required',
            'judul_seminar' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required'
        ]);

        $seminar = Seminar::find($id);

        $update = $seminar->update([
            'tanggal_seminar' => $request->tanggal_seminar,
            'waktu_seminar' => $request->waktu_seminar,
            'judul_seminar' => $request->judul_seminar,
            'penyelenggara' => $request->penyelenggara,
            'keterangan' => $request->keterangan
        ]);

        if($request->foto){

            // DONT FORGET PUT FOTO DELETION HERE

            foreach($request->foto as $key => $foto){
                $randName = Str::random(10);
                $path = Storage::putFileAs(
                    'public/seminar', $foto, $seminar->id.$randName.'.'.$foto->getClientOriginalExtension()
                );
    
                Foto::create([
                    'img_location' => 'seminar/'.$seminar->id.$randName.'.'.$foto->getClientOriginalExtension(),
                    'model_type' => 'siswa',
                    'model_id' => $seminar->id
                ]);
            }
        }

        return redirect('ganti nanti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seminar = Seminar::find($id);

        // DONT FORGET PUT DELETION HERE

        $seminar->delete();

        return redirect('ganti nanti');
    }
}
