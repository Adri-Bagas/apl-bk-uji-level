<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\LayananBK;
use App\Models\Seminar;
use App\Models\Siswa;
use App\Models\Tempat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function tampilansiswa() {

        $seminars = Seminar::all();

        $jenisLayanan = LayananBK::all();

        return view('jadwalkonseling',compact('seminars', 'jenisLayanan'));
    }

    public function inputBuatSiswa($jenislayanan){
        $jenisLayanan = LayananBK::where('jenis_layanan', $jenislayanan)->get()->first();
        $kelases = auth()->user()->siswa->kelas;

        if($jenisLayanan->isAllStudent == 1 ){
            $siswas = Siswa::all();
        }else if($jenisLayanan->isMultiChild == 1){
            $siswas = $kelases->siswas;
        }else{
            $siswas = auth()->user()->siswa;
        }

        $tempats = Tempat::all();
        return view('inputpage', compact(
            'siswas',
            'jenisLayanan',
            'tempats'
        ));
    }

    public function index(){

        $activityLogs = 0;

        $dataKelasWalas = 0;

        $dataKelasBK = 0;

        $jumlahPertemuanSiswa = 0;

        
        $jumlahSiswaYangPernahBertemuBK = 0;

        if(auth()->user()->hasRole('siswa')){
            return redirect('/jadwalkonseling');
        }

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

    public function siswaBKIndex(){
        $kelases = auth()->user()->guru->bk_kelas;

        $siswas = [];

        foreach($kelases as $kelas){
            foreach($kelas->siswas as $siswa){
                array_push($siswas, $siswa);
            }
        }
        return view('dashboards.pages.siswa.bk.index', compact('siswas'));
    }

    public function dataPerjanjianBKDenganSiswa(){
        $KonsulingBKs = auth()->user()->guru->bk_konsuling;
        return view('dashboards.pages.konseling.bk.index', compact('KonsulingBKs'));
    }

    public function dataPerjanjianBKDenganSiswaSesuaiLayanan($namalayanan){
        $LayananBK = LayananBK::where('jenis_layanan', $namalayanan)->get()->first();
        $KonsulingBKs = auth()->user()->guru->bk_konsuling->where('Layanan_BK_id', $LayananBK->id);
        return view('dashboards.pages.konseling.bk.index', compact('KonsulingBKs', 'LayananBK'));
    }

    public function inputBimbingan($jenisLayanan){

        $jenisLayanan = LayananBK::where('jenis_layanan', $jenisLayanan)->get()->first();
        $kelases = auth()->user()->guru->bk_kelas;

        if($jenisLayanan->isAllStudent == 1){
            $siswas = Siswa::all();
        }else{
            $siswas = [];

            foreach($kelases as $kelas){
                foreach($kelas->siswas as $siswa){
                    array_push($siswas, $siswa);
                }
            }
        }

        $tempats = Tempat::all();
        return view('dashboards.pages.konseling.bk.inputBimbingan', compact(
            'siswas',
            'jenisLayanan',
            'tempats'
        ));
    }
}