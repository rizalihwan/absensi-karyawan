@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Silahkan isi data berikut untuk melakukan Absensi
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{ route('karyawan.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                 <label for="nama">Nama Karyawan :</label>
                                 <input type="text" id="nama" value="{{ Auth::user()->name }}" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                 <label for="jeka">Jenis Kelamin :</label>
                                 <select name="jk" id="jeka" class="form-control">
                                     <option disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                 </select>
                            </div>
                            @error('jk')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="shift">Shift :</label>
                                 <input type="text" name="shift" id="shift" class="form-control">
                            </div>
                            @error('shift')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="jabatan">Jabatan :</label>
                                 <input type="text" name="jabatan" id="jabatan" class="form-control">
                            </div>
                            @error('jabatan')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="telp">Nomor Telepon :</label>
                                 <input type="text" name="telepon" id="telp" class="form-control">
                            </div>
                            @error('telepon')
                                {{ $message }}
                            @enderror
                            <a href="{{ route('karyawan.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
