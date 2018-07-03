<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;

use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function index() {
        return view('users.index');
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $this->valida($request);
        $dados = $request->all();
        $dados['password'] = bcrypt($dados['password']);
        User::create($dados);
        return redirect()->route('users.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $this->valida($request);
        $dados = $request->all();
        if (trim($dados['password']) == "") {
            $dados = $request->only('name','email');
        }else{
            $dados['password'] = bcrypt($dados['password']);
        }
        User::find($id)->update($dados);
        return redirect()->route('users.index');
    }

    public function destroy($id) {
        User::destroy($id);
        return redirect()->route('users.index');
    }

    public function datatables() {
        return Datatables::of(User::query())
        ->addColumn('action', function ($user) {
            $routeEdit = route('users.edit', ['id'=> $user->id]);
            $routeDelete = route('users.destroy', ['id'=> $user->id]);
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
            'email' => 'required|email',
            'password' => 'required|max:15|confirmed'
        ],[
            'name.required' => 'Informe o nome',
            'name.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'email.required' => 'Informe o e-mail',
            'email.email' => 'O campo e-mail está invalido',
            'password.required' => 'Informe a senha',
            'password.max' => 'O campo senha deve ter no máximo 15 caracteres',
            'password.confirmed' => 'O campo senha e confirme não estão iguais'
        ]);
    }
}
