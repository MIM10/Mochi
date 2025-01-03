<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Models\PatientReport;
use App\Http\Controllers\Controller;

class PatientReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = PatientReport::all();
        return view('doctor.patient-report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'doctor_id' => 'required',
            'usia' => 'required',
            'gender' => 'required|in:perempuan,laki-laki',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'tanggal_pemeriksaan' => 'required|date',
            'keluhan' => 'required',
            'pertanyaan_pengguna' => 'required',
            'jenis_imunisasi' => 'required',
            'catatan' => 'required',
            'rekomendasi_perawatan' => 'required',
        ]);

        PatientReport::create($request->all());
        return redirect()->route('doctor.patient-reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
