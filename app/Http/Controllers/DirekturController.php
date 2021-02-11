<?php

namespace App\Http\Controllers;

use App\Karyawan;
use PDF;

class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('direktur.index', [
            'data' => Karyawan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak_laporan()
    {
        $karyawan = Karyawan::get();
    	$pdf = PDF::loadview('direktur.laporan', ['data' => $karyawan]);
    	return $pdf->download('laporan-karyawan-pdf');
    }
}
