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

class LaporansBKExport implements FromView, WithStyles
{
    public function view(): View
    {
        $kelases = auth()->user()->guru->bk_kelas;

        $array = [];

        foreach($kelases as $kelas){
            foreach($kelas->siswas as $siswa){
                array_push($array, $siswa);
            }
        }

        $i = 1;

        return view('exports.laporansPertemuanKelas', compact('array', 'i'));
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
