<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor.doctor-data.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.doctor-data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email|max:255',
            'gender' => 'required|in:perempuan,laki-laki',
            'usia' => 'required',
            'spesialis' => 'required',
            'alamat_lengkap' => 'required',
        ]);

        Doctor::create($request->all());
        return redirect()->route('doctor.doctor-data.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('doctor.doctor-data.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.doctor-data.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email,' . $id . '|max:255',
            'gender' => 'required|in:perempuan,laki-laki',
            'usia' => 'required',
            'spesialis' => 'required',
            'alamat_lengkap' => 'required',
        ]);

        $doctor->update($request->all());
        return redirect()->route('doctor.doctor-data.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('doctor.doctor-data.index');
    }
}
