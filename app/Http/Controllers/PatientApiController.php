<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Patient;

class PatientApiController extends Controller
{
    public function index(Request $request) {
        if($request->id){
            return Patient::find($request->id);
        } 
        return Patient::all();
    }
    public function store(Request $request) {
        return Patient::create($request->all());
    }

    public function update(Request $request, $id) {
        return Patient::find($id)->update($request->all());
    }

    public function destroy($id) {
        return Patient::destroy($id);
    }
}
