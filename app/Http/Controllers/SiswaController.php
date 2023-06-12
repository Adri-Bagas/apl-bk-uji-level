<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view('dashboards.pages.siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();

        
        return view('dashboards.pages.siswa.create', compact('siswa', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_telepon' => 'required',
            'nipd' => 'required',
            'nisn' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_type' => 'siswa'
        ]);

        $siswa = Siswa::create([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
            'nipd' => $request->nipd,
            'nisn' => $request->nisn,
            'kelas_id' => $request->kelas_id
        ]);

        if($request->foto){
            $path = Storage::putFileAs(
                'public/siswa', $request->file('foto'), $siswa->id.'.'.$request->foto->getClientOriginalExtension()
            );

            Foto::create([
                'img_location' => 'siswa/'.$siswa->id.'.'.$request->foto->getClientOriginalExtension(),
                'model_type' => 'siswa',
                'model_id' => $siswa->id
            ]);
        }

        $user->assignRole('siswa');

        return redirect()->route('siswa');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();

        return view('dashboards.pages.siswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $profile_type = $user->profile_type;

        $profile = $user->$profile_type;

        $validated = $request->validate([
            'name' => 'required',
            'nipd' => 'required',
            'password' => 'required',
            'nisn' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'kelas_id' => 'required'
        ]);

        $update = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if(!$update){
            return response()->json(
                'Gagal'
            );  
        }

        $update2 = $profile->update([
            'user_id' => $user->id,
            'nisn' => $request->nisn,
            'nipd' => $request->nipd,
            'no_telepon' => $request->no_telepon,
            'kelas_id' => $request->kelas_id
        ]);

        if($request->foto){
            $path = Storage::putFileAs(
                'public/siswa', $request->file('foto'), $profile->id.'.'.$request->foto->getClientOriginalExtension()
            );

            if(sizeof($profile->fotos()) == 0){
                
            Foto::create([
                'img_location' => 'siswa/'.$profile->id.'.'.$request->foto->getClientOriginalExtension(),
                'model_type' => 'siswa',
                'model_id' => $profile->id
            ]);
            }
        }
        
        $user->update($request->all());
        return redirect('/siswa')
        ->with('success','Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $profile_type = $user->profile_type;

        $profile = $user->$profile_type;

        $profile->delete();

        $profile->delete();

        return redirect()->route('siswa');
    }
}
