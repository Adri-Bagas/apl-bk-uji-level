<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalasController extends Controller
{
    public function getAllDataSiswaFromKelas(){
        $siswas = auth()->user()->guru->walas_kelas->siswas;

        return view('dashboards.pages.siswa.bk.index', compact('siswas'));
    }

    public function getAllSiswaSchedule(){
        $siswas = auth()->user()->guru->walas_kelas->siswas;

        $konselingBKs = [];

        foreach($siswas->konselings as $item){
            array_push($konselingBKs, $item);
        }

        return view('dashboards.pages.konseling.bk.index', compact('konselingBKs'));
    }
}
