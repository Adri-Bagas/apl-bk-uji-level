<?php

namespace App\Exports;

use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;

class LaporansExport implements FromView, WithStyles
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

        $jumlah_siswa = Siswa::all()->count();
        $jumlah_pertemuan = 0;

        foreach($keys as $key){
            $jumlah_pertemuan += $jumlahPertemuanSiswaPerJurusan[$key];
        }


        return view('exports.laporans', compact('keys', 'jumlahSiswaPerJurusan', 'jumlahPertemuanSiswaPerJurusan', 'jumlah_siswa', 'jumlah_pertemuan'));
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        $range = 'A1:' . $highestColumn . $highestRow;

        $sheet->getStyle($range)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '00000000'],
                ],
            ],
        ]);
    }
}
