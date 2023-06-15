<?php

namespace App\Http\Controllers;

use App\Exports\LaporansExport;
use App\Exports\LaporansBKExport;
use App\Models\Jurusan;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function test_data(){
        $kelases = auth()->user()->guru->bk_kelas;

        $array = [];

        foreach($kelases as $kelas){
            foreach($kelas->siswas as $siswa){
                array_push($array, $siswa);
            }
        }

        return dd($array);
    }

    public function export() 
    {
        return Excel::download(new LaporansExport, 'laporanJurusan.xlsx');
    }

    public function export2() 
    {
        return Excel::download(new LaporansBKExport, 'laporanBK.xlsx');
    }
}
