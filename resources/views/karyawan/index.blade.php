@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Data Absen</a>
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                    @if(session()->has('sukses'))
                        <b style="color: green; font-size: 25px;">{{ session()->get('sukses') }}</b>
                    @endif
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Shift</th>
                                    <th>Jabatan</th>
                                    <th>Telepon</th>
                                    <th>Absen Pada</th>
                                    <th>Aksi</th>
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
                                    <td>
                                        <a href="{{ route('karyawan.edit', $r->id) }}" class="btn btn-warning float-left mb-1">Edit</a>
                                        <form action="{{ route('karyawan.destroy', $r->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
