<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

</style>
</head>
<body>

<table>
    <tr>
        <th colspan="5" style="text-align: center; background-color: #B9D0FF; font-weight:bold"> Persentase Pertemuan BK Perjurusan </th>
    </tr>
    <thead>
        <tr>
            <th style="text-align: center; width: 30px;">#</th>
            <th style="text-align: center; width: 100px;">Jurusan</th>
            <th style="text-align: center; width: 100px;">Jumlah Murid</th>
            <th style="text-align: center; width: 100px;">Pertemuan BK</th>
            <th style="text-align: center; width: 100px;">Persentase</th>
        </tr>
    </thead>
    <tbody>
        @foreach($keys as $key)
        <tr>
            <td style="text-align: center;">{{ $loop->iteration }}</td>
            <td style="text-align: center;">{{ $key }}</td>
            <td style="text-align: center;">{{ $jumlahSiswaPerJurusan[$key] }}</td>
            <td style="text-align: center;">{{ $jumlahPertemuanSiswaPerJurusan[$key] }}</td>
            <td style="text-align: center;">{{  round(($jumlahPertemuanSiswaPerJurusan[$key] / $jumlahSiswaPerJurusan[$key]) * 100, 2) }}%</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" style="background-color: #B9D0FF;">Jumlah Keseluruhan</td>
            <td style="background-color: #B9D0FF; text-align: center;">{{ $jumlah_siswa }}</td>
            <td style="background-color: #B9D0FF; text-align: center;">{{ $jumlah_pertemuan }}</td>
            <td style="background-color: #B9D0FF; text-align: center;">{{ round(($jumlah_pertemuan / $jumlah_siswa)*100, 2) }}%</td>
        </tr>
    </tfoot>
</table>

</body>
</html>