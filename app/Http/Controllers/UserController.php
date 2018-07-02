<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(15);
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        User::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.index', compact('user'));
    }

    public function update(Request $request, $id) {
        User::find($id)->update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy($id) {
        User::find($id)->destroy();
        return redirect()->route('users.index');
    }
}
