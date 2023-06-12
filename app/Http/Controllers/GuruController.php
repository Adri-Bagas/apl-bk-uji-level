<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

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

        $guru = Guru::create([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
        ]);

        if($request->foto){
            $path = Storage::putFileAs(
                'public/guru', $request->file('foto'), $guru->id.'.'.$request->foto->getClientOriginalExtension()
            );

            Foto::create([
                'img_location' => 'guru/'.$guru->id.'.'.$request->foto->getClientOriginalExtension(),
                'model_type' => 'guru',
                'model_id' => $guru->id
            ]);
        }

        foreach($request->roles as $roles){
            $user->assignRole($roles);
        }

        return redirect('/guru');
        // return response()->json(
        //     'berhasil'
        // );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guru = Guru::find($id);$roles = $guru->user->getRoleNames()->toArray();
        return view('dashboards.pages.guru.show', compact('guru', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::find($id);
        $roles = $guru->user->getRoleNames()->toArray();
        return view('dashboards.pages.guru.edit', compact('guru', 'roles'));
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
            
            'no_telepon' => 'required',
            'roles' => 'required',
        ]);

        $update = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'profile_type' => 'guru'
        ]);

        if(!$update){
            return response()->json(
                'Gagal'
            );  
        }

        $update2 = $profile->update([
            'user_id' => $user->id,
            'no_telepon' => $request->no_telepon,
        ]);

        if($request->foto){
            $path = Storage::putFileAs(
                'public/guru', $request->file('foto'), $profile->id.'.'.$request->foto->getClientOriginalExtension()
            );

            if(sizeof($profile->fotos()) == 0){
                
            Foto::create([
                'img_location' => 'guru/'.$profile->id.'.'.$request->foto->getClientOriginalExtension(),
                'model_type' => 'guru',
                'model_id' => $profile->id
            ]);
            }
        }

        $user->syncRoles([]);

        foreach($request->roles as $roles){
            $user->assignRole($roles);
        }
        
        $user->update($request->all());
        return redirect('/guru')
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

        $user->delete();

        return redirect('/guru');
        
    }
}
