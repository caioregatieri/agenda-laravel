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
        Scheduling::find($id)->update($request->all());
        return redirect()->route('schedulings.index');
    }

    public function destroy($id) {
        Scheduling::find($id)->destroy();
        return redirect()->route('schedulings.index');
    }
}
