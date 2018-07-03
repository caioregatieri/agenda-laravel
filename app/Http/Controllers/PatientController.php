<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Patient;
use Yajra\Datatables\Datatables;

class PatientController extends Controller
{
    public function index() {
        return view('patients.index');
    }

    public function create() {
        return view('patients.create');
    }

    public function store(Request $request) {
        $this->valida($request);
        Patient::create($request->all());
        return redirect()->route('patients.index');
    }

    public function edit($id) {
        $patient = Patient::find($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id) {
        $this->valida($request);
        Patient::find($id)->update($request->all());
        return redirect()->route('patients.index');
    }

    public function destroy($id) {
        Patient::destroy($id);
        return redirect()->route('patients.index');
    }

    public function datatables() {
        return Datatables::of(Patient::query())
        ->addColumn('action', function ($patient) {
            $routeEdit = route('patients.edit', ['id'=> $patient->id]);
            $routeDelete = route('patients.destroy', ['id'=> $patient->id]);
            return "<a href='" .$routeEdit. "' class='btn btn-primary btn-sm'>" . 
                        "<i class='fa fa-pencil'></i> Editar" . 
                    "</a>" . 
                    "&nbsp;" .
                    "<a href='" .$routeDelete. "' class='btn btn-danger btn-sm btn-delete'>" . 
                        "<i class='fa fa-trash'></i> Excluir" . 
                    "</a>";
        })
        ->make(true);
    }

    public function valida($request){
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|max:20',
            'city' => 'required|max:50',
            'state' => 'required|max:2',
            'place' => 'required|max:50',
            'number' => 'required|max:5',
            'neighborhood' => 'required|max:50'
        ],[
            'name.required' => 'Informe o nome',
            'name.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'phone.required' => 'Informe o telefone',
            'phone.max' => 'O campo telefone deve ter no máximo 20 caracteres',
            'city.required' => 'Informe a cidade',
            'city.max' => 'O campo cidade deve ter no máximo 50 caracteres',
            'state.required' => 'Informe o estado',
            'state.max' => 'O campo estado deve ter no máximo 2 caracteres',
            'place.required' => 'Informe o logradouro',
            'place.max' => 'O campo logradouro deve ter no máximo 50 caracteres',
            'number.required' => 'Informe o numero',
            'number.max' => 'O campo numero deve ter no máximo 5 caracteres',
            'neighborhood.required' => 'Informe o bairro',
            'neighborhood.max' => 'O campo bairro deve ter no máximo 50 caracteres',
        ]);
    }
}
