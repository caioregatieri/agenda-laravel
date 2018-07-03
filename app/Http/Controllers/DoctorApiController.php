<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Doctor;

class DoctorApiController extends Controller
{
    public function index(Request $request) {
        if($request->id){
            return Doctor::find($request->id);
        } 
        return Doctor::all();
    }

    public function store(Request $request) {
        return Doctor::create($request->all());
    }

    public function update(Request $request, $id) {
        return Doctor::find($id)->update($request->all());
    }

    public function destroy($id) {
        return Doctor::destroy($id);
    }
}
