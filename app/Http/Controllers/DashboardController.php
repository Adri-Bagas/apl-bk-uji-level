<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $activityLogs = 0;

        $dataKelasWalas = 0;

        $dataKelasBK = 0;

        $jumlahPertemuanSiswa = 0;

        if(auth()->user()->hasRole('admin')){
            $activityLogs = ActivityLog::all();
        }

        if(auth()->user()->hasRole('walas')){
            $dataKelasWalas = auth()->user()->guru->walas_kelas;

            $dataSiswasWalas = $dataKelasWalas->siswas;

            $jumlahPertemuanSiswa = 0;

            $jumlahSiswaYangPernahBertemuBK = 0;

            foreach($dataSiswasWalas as $item){
                if($item->konsulings->count() > 0){
                    $jumlahSiswaYangPernahBertemuBK += 1;
                }
                $jumlahPertemuanSiswa += $item->konsulings->count();
            }
        }

        $dataKelasTerorganisirUntukBK = [];

        if(auth()->user()->hasRole('bk')){
            $dataKelasBK = auth()->user()->guru->bk_kelas;

            foreach($dataKelasBK as $item){

                $_yangBertemuDenganBK = 0;
                $_sum = 0;
                foreach($item->siswas as $siswa){
                    if($siswa->konsulings->count() > 0){
                        $_yangBertemuDenganBK += 1;
                    }
                    $_sum += $siswa->konsulings->count();
                }

                array_push($dataKelasTerorganisirUntukBK, [
                    'nama' => $item->nama,
                    'siswa_count' => $item->siswas->count(),
                    'total_pertemuan' => $_sum,
                    'total_yang_pernah_bertemu_bk' => $_yangBertemuDenganBK,
                ]);
            }
        }

        return view('dashboards.pages.main', compact(
            'activityLogs',
            'dataKelasWalas',
            'dataKelasTerorganisirUntukBK',
            'jumlahPertemuanSiswa',
            'jumlahSiswaYangPernahBertemuBK'
        ));
    }
}