<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Scheduling;
Use App\Doctor;
Use App\Patient;

class SchedulingController extends Controller
{
    public function index() {
        $schedulings = Scheduling::paginate(15);
        return view('schedulings.index', compact('schedulings'));
    }

    public function create() {
        $patients = Patient::all()->pluck('name', 'id');
        $doctors = Doctor::all()->pluck('name', 'id');
        $status = collect(['1'=>'Pendente', '2'=>'Atendido', '3'=>'Cancelado']);
        return view('schedulings.create', compact('patients','doctors','status'));
    }

    public function store(Request $request) {
        $this->valida($request);
        Scheduling::create($request->all());
        return redirect()->route('schedulings.index');
    }

    public function edit($id) {
        $patients = Patient::all()->pluck('name', 'id');
        $doctors = Doctor::all()->pluck('name', 'id');
        $status = collect(['1'=>'Pendente', '2'=>'Atendido', '3'=>'Cancelado']);
        $scheduling = Scheduling::find($id);
        return view('schedulings.edit', compact('scheduling','patients','doctors','status'));
    }

    public function update(Request $request, $id) {
        $this->valida($request);
        Scheduling::find($id)->update($request->all());
        return redirect()->route('schedulings.index');
    }

    public function destroy($id) {
        Scheduling::destroy($id);
        return redirect()->route('schedulings.index');
    }

    public function valida($request){
        $request->validate([
            'user_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'patient_id' => 'required|integer',
            'date' => 'required',
            'time' => 'required|',
            'status' => 'required|integer',
        ],[
            'user_id.required' => 'Informe o id do usuário',
            'doctor_id.required' => 'Informe o id do médico',
            'patient_id.required' => 'Informe o id do paciente',
            'date.required' => 'Informe a data',
            'time.required' => 'Informe o horário',
            'status.required' => 'Informe a situação',
        ]);
    }
}
