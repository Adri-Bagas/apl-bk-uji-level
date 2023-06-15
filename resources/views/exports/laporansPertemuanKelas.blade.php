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
        <th colspan="10" style="text-align: center; background-color: #B9D0FF; font-weight:bold"> Persentase Pertemuan BK Perjurusan </th>
    </tr>
    <thead>
        <tr>
            <th style="text-align: center; width: 30px;">#</th>
            <th style="text-align: center; width: 140px;">Jenis Layanan</th>
            <th style="text-align: center; width: 100px;">Kelas</th>
            <th style="text-align: center; width: 100px;">Murid</th>
            <th style="text-align: center; width: 100px;">Tanggal</th>
            <th style="text-align: center; width: 100px;">Waktu</th>
            <th style="text-align: center; width: 100px;">Tempat</th>
            <th style="text-align: center; width: 200px;">Keterangan</th>
            <th style="text-align: center; width: 100px;">Status</th>
            <th style="text-align: center; width: 200px;">Hasil</th>
        </tr>
    </thead>
    <tbody>
        @foreach($array as $item)
        @foreach($item->konsulings as $konsul)
        <tr>
            <td style="text-align: center;">{{ $i++ }}</td>
            <td style="text-align: center;">{{ $konsul->layananBK->jenis_layanan }}</td>
            <td style="text-align: center;">{{ $item->kelas->nama }}</td>
            <td style="text-align: center;">{{ $item->user->name }}</td>
            <td style="text-align: center;">{{ $konsul->tanggal_konseling }}</td>
            <td style="text-align: center;">{{ $konsul->waktu_konseling }}</td>
            <td style="text-align: center;">{{ $konsul->tempat->nama }}</td>
            <td style="text-align: center;">{{ $konsul->ket }}</td>
            <td style="text-align: center;">{{ $konsul->status }}</td>
            <td style="text-align: center;">{{ $konsul->hasil }}</td>
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>

</body>
</html>