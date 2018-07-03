<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;

class UserApiController extends Controller
{
    public function index(Request $request) {
        if($request->id){
            return User::find($request->id);
        } 
        return User::all();
    }

    public function store(Request $request) {
        return User::create($request->all());
    }

    public function update(Request $request, $id) {
        $values = $request->all();
        if (trim($values['password']) == "") {
            $values = $request->only('name','email');
        }else{
            $values['email'] = bcrypt($values['email']);
        }
        return User::find($id)->update($values);
    }

    public function destroy($id) {
        return User::destroy($id);
    }
}
