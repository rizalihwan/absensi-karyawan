@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Laporan karyawan</h1>
                    <a href="{{ route('direktur.laporan') }}" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-download fa-sm text-white-50"></i> Print Laporan</a>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
