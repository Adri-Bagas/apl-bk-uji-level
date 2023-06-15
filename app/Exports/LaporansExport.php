<?php

namespace App\Exports;

use App\Models\Jurusan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LaporansExport implements FromView
{
    public function view(): View
    {

        $jurusan = Jurusan::all();

        $jurusanKelas = [];

        $jumlahSiswaPerJurusan = [];

        $jumlahPertemuanSiswaPerJurusan = [];

        foreach($jurusan as $item){
            foreach ($item->kelas as $kelas) {
                if (!array_key_exists($item->nama, $jurusanKelas)) {
                    $jurusanKelas[$item->nama] = [];
                }
                $jurusanKelas[$item->nama][] = $kelas;
            }
        }

        foreach($jurusanKelas as $key => $datas){
            foreach($datas as $data){
                if (!array_key_exists($key, $jumlahSiswaPerJurusan)) {
                    $jumlahSiswaPerJurusan[$key] = 0;
                }
                $jumlahSiswaPerJurusan[$key] += $data->siswas->count();
            }
        }

        foreach($jurusanKelas as $key => $datas){
            foreach($datas as $data){
                if (!array_key_exists($key, $jumlahPertemuanSiswaPerJurusan)) {
                    $jumlahPertemuanSiswaPerJurusan[$key] = 0;
                }
                foreach($data->siswas as $item){
                    $jumlahPertemuanSiswaPerJurusan[$key] += $item->konsulings->count();
                }
            }
        }

        $keys = [];

        foreach($jurusan as $item){
            array_push($keys, $item->nama);
        }


        return view('exports.laporans', compact('keys', 'jumlahSiswaPerJurusan', 'jumlahPertemuanSiswaPerJurusan'));
    }
}
