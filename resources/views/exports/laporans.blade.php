<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Jurusan</th>
            <th>Jumlah Murid</th>
            <th>Pertemuan BK</th>
            <th>Persentase</th>
        </tr>
    </thead>
    <tbody>
        @foreach($keys as $key)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $key }}</td>
            <td>{{ $jumlahSiswaPerJurusan[$key] }}</td>
            <td>{{ $jumlahPertemuanSiswaPerJurusan[$key] }}</td>
            <td>{{  round($jumlahPertemuanSiswaPerJurusan[$key] / $jumlahSiswaPerJurusan[$key], 2) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
