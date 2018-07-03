<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Scheduling;

class SchedulingApiController extends Controller
{
    public function index(Request $request) {
        if($request->id){
            return Scheduling::with(['doctor','patient','user'])->find($request->id);
        } 
        return Scheduling::with(['doctor','patient','user'])->get();
    }

    public function store(Request $request) {
        return Scheduling::create($request->all());
    }

    public function update(Request $request, $id) {
        return Scheduling::find($id)->update($request->all());
    }

    public function destroy($id) {
        return Scheduling::destroy($id);
    }
}
