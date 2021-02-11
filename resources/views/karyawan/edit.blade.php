@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{ route('karyawan.update', $data->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                 <label for="nama">Nama Karyawan :</label>
                                 <input type="text" id="nama" value="{{ Auth::user()->name }}" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                 <label for="jeka">Jenis Kelamin :</label>
                                 <select name="jk" id="jeka" class="form-control">
                                    <option value="Laki - Laki" @if($data->jk == 'Laki - Laki') selected @endif>Laki - Laki</option>
                                    <option value="Perempuan" @if($data->jk == 'Perempuan') selected @endif>Perempuan</option>
                                 </select>
                            </div>
                            @error('jk')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="shift">Shift :</label>
                                 <input type="text" name="shift" value="{{ $data->shift }}" id="shift" class="form-control">
                            </div>
                            @error('shift')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="jabatan">Jabatan :</label>
                                 <input type="text" name="jabatan" value="{{ $data->jabatan }}" id="jabatan" class="form-control">
                            </div>
                            @error('jabatan')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="telp">Nomor Telepon :</label>
                                 <input type="text" name="telepon" value="{{ $data->telepon }}" id="telp" class="form-control">
                            </div>
                            @error('telepon')
                                {{ $message }}
                            @enderror
                            <a href="{{ route('karyawan.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
