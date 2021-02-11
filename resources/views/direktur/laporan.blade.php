<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Karyawan</title>
</head>
<body>
    <center>
        <h1><b>Laporan Karyawan</b></h1>
        <table border="1" cellspacing="0" cellpading="5" style="width: 100%;">
            <tr>
                <th>No.</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
                <th>Shift</th>
                <th>Jabatan</th>
                <th>Telepon</th>
                <th>Absen Pada</th>
            </tr>
            @php
                $nomor = 1;
            @endphp
            @foreach ($data as $r)
            <tr>
                <th>{{ $nomor++ }}</th>
                <td>{{ $r->user->name }}</td>
                <td>{{ $r->jk }}</td>
                <td>{{ $r->shift }}</td>
                <td>{{ $r->jabatan }}</td>
                <td>{{ $r->telepon }}</td>
                <th>{{ $r->created_at->diffForHumans() }}</th>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
