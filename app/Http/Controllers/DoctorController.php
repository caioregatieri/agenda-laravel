<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Doctor;
use Yajra\Datatables\Datatables;

class DoctorController extends Controller
{
    public function index() {
        return view('doctors.index');
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

    public function datatables() {
        return Datatables::of(Doctor::query())
        ->addColumn('action', function ($doctor) {
            $routeEdit = route('doctors.edit', ['id'=> $doctor->id]);
            $routeDelete = route('doctors.destroy', ['id'=> $doctor->id]);
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
            'specialty' => 'required|max:50'
        ],[
            'name.required' => 'Informe o nome',
            'name.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'phone.required' => 'Informe o telefone',
            'phone.max' => 'O campo telefone deve ter no máximo 20 caracteres',
            'specialty.required' => 'Informe a especialidade',
            'specialty.max' => 'O campo especialidade deve ter no máximo 50 caracteres'
        ]);
    }
}
