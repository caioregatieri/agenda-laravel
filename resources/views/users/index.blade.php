@extends('template')

@section('title')
Usuários
@endsection

@section('content')

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading clearfix">
        <div class="btn-group pull-left">
          <a href="{{ route('users.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Novo</a>
        </div>
        <h4 class="panel-title pull-right" style="padding-top: 7.5px;">Registros: {{ $users->total() }}</h4>
      </div>
      <!-- Table -->
      <table class="table table-striped table-responsible table-sm">
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
          </tr>
          @foreach($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td style="width: 160px; text-align: right">
                <a href="{{ route('users.edit',['id'=>$user->id])}}" class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil"></i> Editar
                </a>
                <a href="{{ route('users.destroy',['id'=>$user->id])}}" class="btn btn-danger btn-sm btn-delete">
                    <i class="fa fa-trash"></i> Excluir
                </a>
              </td>
            </tr>
          @endforeach
      </table>

    </div>

    {!! $users->render() !!}

@endsection
