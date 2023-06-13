<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
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

        return view('dashboards.pages.seminar.index', compact('seminars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.pages.seminar.create');
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

        ActivityLog::create([
            'activity' => 'Seminar Baru "'.$seminar->judul_seminar.'" Di tambahkan oleh '.auth()->user()->name
        ]);


        if($request->foto){
            foreach($request->foto as $key => $foto){

                $randName = Str::random(10);
                $path = Storage::putFileAs(
                    'public/seminar', $foto, $seminar->id.$randName.'.'.$foto->getClientOriginalExtension()
                );
    
                Foto::create([
                    'img_location' => 'seminar/'.$seminar->id.$randName.'.'.$foto->getClientOriginalExtension(),
                    'model_type' => 'seminar',
                    'model_id' => $seminar->id
                ]);
            }
        }

        return redirect()->route('seminar');
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
        return view('dashboards.pages.seminar.edit', compact('seminar'));
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

            if($seminar->fotos() != null){
                foreach ($seminar->fotos() as $foto) {
                    Storage::delete('public/' . $foto->img_location);
                    $foto->delete();
                }
            }
            

            foreach($request->foto as $key => $foto){
                $randName = Str::random(10);
                $path = Storage::putFileAs(
                    'public/seminar', $foto, $seminar->id.$randName.'.'.$foto->getClientOriginalExtension()
                );
    
                Foto::create([
                    'img_location' => 'seminar/'.$seminar->id.$randName.'.'.$foto->getClientOriginalExtension(),
                    'model_type' => 'seminar',
                    'model_id' => $seminar->id
                ]);
            }
        }


        ActivityLog::create([
            'activity' => 'Seminar  "'.$seminar->judul_seminar.'" Di edit Oleh '.auth()->user()->name
        ]);



        return redirect()->route('seminar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seminar = Seminar::find($id);

        foreach ($seminar->fotos() as $foto) {
            Storage::delete('public/' . $foto->img_location);
            $foto->delete();
        }

        $seminar->delete();


        ActivityLog::create([
            'activity' => 'Seminar  "'.$seminar->judul_seminar.'" Di Hapus Oleh '.auth()->user()->name
        ]);

        return redirect()->route('seminar');
    }
}
