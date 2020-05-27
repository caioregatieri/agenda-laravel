<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

Use App\Patient;

class PatientController extends Controller
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
