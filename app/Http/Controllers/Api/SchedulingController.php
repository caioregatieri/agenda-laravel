<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

Use App\Scheduling;

class SchedulingController extends Controller
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
