@extends('layouts.admin')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Register Akun</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                            placeholder="Masukan Nama anda">
                                            @error('name')
                                                <b style="color: red;">{{ $message }}</b>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                            @error('email')
                                                <b style="color: red;">{{ $message }}</b>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <select name="role" class="form-control" required>
                                            <option disabled selected>Pilih Role Anda</option>
                                            <option value="direktur">Direktur</option>
                                            <option value="karyawan">Karyawan</option>
                                        </select>
                                        @error('role')
                                            <b style="color: red;">{{ $message }}</b>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                                            id="exampleInputPassword" placeholder="Masukan Password">
                                            @error('password')
                                                <b style="color: red;">{{ "Password Tidak Sesuai" }}</b>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="exampleInputPassword" placeholder="Masukan Password kembali">
                                    </div>
                                    <a href="{{ route('login') }}" class="btn btn-danger btn-sm">Kembali</a>
                                    <button class="btn btn-primary btn-sm">
                                        Register
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
