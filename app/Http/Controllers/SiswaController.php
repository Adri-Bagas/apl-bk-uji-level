<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view( '/', compact('kelass'));
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

        Siswa::create([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
            'nipd' => $request->nipd,
            'nik' => $request->nisn
        ]);

        $user->assignRole('siswa');

        return response()->json(
            'berhasil'
        );

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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        $user = User::find($id);

        $profile_type = $user->profile_type;

        $profile = $user->$profile_type;

        $update = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_type' => 'siswa'
        ]);

        $profile->update([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
            'nipd' => $request->nipd,
            'nik' => $request->nisn
        ]);

        return response()->json(
            'berhasil'
        );
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
    }
}
