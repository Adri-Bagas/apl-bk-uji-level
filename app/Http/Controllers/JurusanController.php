<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
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
        $jurusan = Jurusan::all();
        return view('dashboards.pages.jurusan.index', compact(
            'jurusan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        $jurusan = Jurusan::all();
        return view('dashboards.pages.jurusan.create',['jurus'=> $jurusan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $input = $request->all();
        Jurusan::create($input);
        return redirect('jurusan')
        ->with('success','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('dashboards.pages.jurusan.show', ['jurus' => $jurusan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jurusan =Jurusan::findOrFail($id);
        return view('dashboards.pages.jurusan.edit',['jurus'=>$jurusan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jurusan = Jurusan::find($id);
        $request->validate([
            'nama'
        ]);

        $jurusan->update($request->all());
        return redirect('/jurusan')
        ->with('success','Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan -> delete();
        return redirect('/jurusan')
        -> with('success','Data Berhasil Di Hapus');
    }
}
