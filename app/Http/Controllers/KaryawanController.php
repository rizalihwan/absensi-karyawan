<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index', [
            'data' => Karyawan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Karyawan;
        $data->user_id = auth()->user()->id;
        $data->jk = $request->jk;
        $data->shift = $request->shift;
        $data->jabatan = $request->jabatan;
        $data->telepon = $request->telepon;
        $data->save();
        return redirect()->route('karyawan.index')->with('sukses', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Karyawan::findOrFail($id);
        $data->user_id = auth()->user()->id;
        $data->jk = $request->jk;
        $data->shift = $request->shift;
        $data->jabatan = $request->jabatan;
        $data->telepon = $request->telepon;
        $data->save();
        return redirect()->route('karyawan.index')->with('sukses', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Karyawan::findOrFail($id);
        $data->delete();
        return back()->with('sukses', 'Data berhasil dihapus!');
    }
}
