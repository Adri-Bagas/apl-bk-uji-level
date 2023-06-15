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

        $KonsulingBKs = [];

        foreach($siswas as $item){
            foreach($item->konsulings as $konsuling){
                array_push($KonsulingBKs, $konsuling);
            }
        }

        return view('dashboards.pages.konseling.bk.index', compact('KonsulingBKs'));
    }
}
