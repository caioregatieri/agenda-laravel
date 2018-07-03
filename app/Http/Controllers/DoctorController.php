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
        $this->valida($request);
        Doctor::create($request->all());
        return redirect()->route('doctors.index');
    }

    public function edit($id) {
        $doctor = Doctor::find($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id) {
        $this->valida($request);
        Doctor::find($id)->update($request->all());
        return redirect()->route('doctors.index');
    }

    public function destroy($id) {
        Doctor::destroy($id);
        return redirect()->route('doctors.index');
    }

    public function valida($request){
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|max:20',
            'speciality' => 'required|max:50'
        ],[
            'name.required' => 'Informe o nome',
            'name.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'phone.required' => 'Informe o telefone',
            'phone.max' => 'O campo telefone deve ter no máximo 20 caracteres',
            'speciality.required' => 'Informe a especialidade',
            'speciality.max' => 'O campo especialidade deve ter no máximo 50 caracteres'
        ]);
    }
}
