<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Doctor;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::paginate(15);
        return view('doctors.index', compact('doctors'));
    }

    public function create() {
        return view('doctors.create');
    }

    public function store(Request $request) {
        Doctor::create($request->all());
        return redirect()->route('doctors.index');
    }

    public function edit($id) {
        $doctor = Doctor::find($id);
        return view('doctors.index', compact('doctor'));
    }

    public function update(Request $request, $id) {
        Doctor::find($id)->update($request->all());
        return redirect()->route('doctors.index');
    }

    public function destroy($id) {
        Doctor::find($id)->destroy();
        return redirect()->route('doctors.index');
    }
}
