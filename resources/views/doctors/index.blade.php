@extends('template')

@section('title')
Médicos
@endsection

@section('content')

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading clearfix">
        <div class="btn-group pull-left">
          <a href="{{ route('doctors.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Novo</a>
        </div>
        <h4 class="panel-title pull-right" style="padding-top: 7.5px;">Registros: {{ $doctors->total() }}</h4>
      </div>
      <!-- Table -->
      <table class="table table-striped table-responsible table-sm">
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th></th>
          </tr>
          @foreach($doctors as $doctor)
            <tr>
              <td>{{$doctor->id}}</td>
              <td>{{$doctor->name}}</td>
              <td>{{$doctor->phone}}</td>
              <td style="width: 100px; text-align: right">
                <a href="{{ route('doctors.edit',['id'=>$doctor->id])}}" class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil"></i> Editar
                </a>
                <a href="{{ route('doctors.delete',['id'=>$doctor->id])}}" class="btn btn-danger btn-sm btn-delete">
                    <i class="fa fa-trash"></i> Excluir
                </a>
              </td>
            </tr>
          @endforeach
      </table>

    </div>

    {!! $doctors->render() !!}

@endsection
