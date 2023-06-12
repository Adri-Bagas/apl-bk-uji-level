<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
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
        $kelas = Kelas::all();
        return view('dashboards.pages.kelas.index', compact(
            'kelas'
        ));

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
        $guru = Guru::all();
        $jurusan = Jurusan::all();
        $bk = User::role('bk')->get();

        // $bksss = [];

        // foreach($bk as $bks){
        //     array_push($bksss, [$bks, $bks->guru]);
        // }
        // return $bksss;


        return view('dashboards.pages.kelas.create', compact(
            'guru',
            'jurusan',
            'bk',
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'walas_id' => 'required', 
            'bk_id' => 'required',
            'jurusan_id' => ' required'
        ]);
      
        Kelas::create([
            'nama' => $request->nama,
            'walas_id' => $request->walas_id,
            'bk_id' => $request->bk_id,
            'jurusan_id' => $request->jurusan_id,
        ]);
        return redirect('kelas')
        ->with('success','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('dashboards.pages.kelas.show', ['kelasss' => $kelas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelasss =Kelas::findOrFail($id);
        $guru = Guru::all();
        $jurusan = Jurusan::all();
        $bk = User::role('bk')->get();
        return view('dashboards.pages.kelas.edit', compact(
            'kelasss',
            'guru',
            'jurusan',
            'bk'
        ));
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
            'jurusan',
            'bk_id'
        ]);

        $kelas->update($request->all());
        return redirect('/kelas')
        ->with('success','Data Berhasil Di Perbarui');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect('/kelas')
        -> with('success','Data Berhasil Di Hapus');

    }
}
