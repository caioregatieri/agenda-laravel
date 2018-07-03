<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Patient;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::paginate(15);
        return view('patients.index', compact('patients'));
    }

    public function create() {
        return view('patients.create');
    }

    public function store(Request $request) {
        Patient::create($request->all());
        return redirect()->route('patients.index');
    }

    public function edit($id) {
        $patient = Patient::find($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id) {
        Patient::find($id)->update($request->all());
        return redirect()->route('patients.index');
    }

    public function destroy($id) {
        Patient::destroy($id);
        return redirect()->route('patients.index');
    }
}
