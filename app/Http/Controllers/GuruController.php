<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('dashboards.pages.guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.pages.guru.create');
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
            'roles' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_type' => 'guru'
        ]);

        Guru::create([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
        ]);

        foreach($request->roles as $roles){
            $user->assignRole($roles);
        }

        return response()->json(
            'berhasil'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guru = Guru::find($id);
        return $guru;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::find($id);
        return view('stuff', compact('guru'));
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
            'email' => 'required',
            'password' => 'required',
            'no_telepon' => 'required',
            'roles' => 'required',
        ]);

        $update = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_type' => 'guru'
        ]);

        $update2 = $profile->update([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
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

        $user->delete();
    }
}
