@extends('template')

@section('title')
Agendamentos
@endsection

@section('content')

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading clearfix">
        <div class="btn-group pull-left">
          <a href="{{ route('patients.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Novo</a>
        </div>
        <h4 class="panel-title pull-right" style="padding-top: 7.5px;">Registros: {{ $schedulings->total() }}</h4>
      </div>
      <!-- Table -->
      <table class="table table-striped table-responsible table-sm">
          <tr>
            <th>Id</th>
            <th>Paciente</th>
            <th>Medico</th>
            <th>Data</th>
            <th></th>
          </tr>
          @foreach($schedulings as $scheduling)
            <tr>
              <td>{{$scheduling->patient->name}}</td>
              <td>{{$scheduling->doctor->name}}</td>
              <td>{{$scheduling->date}}</td>
              <td style="width: 100px; text-align: right">
                <a href="{{ route('schedulings.edit',['id'=>$scheduling->id])}}" class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil"></i> Editar
                </a>
                <a href="{{ route('schedulings.delete',['id'=>$scheduling->id])}}" class="btn btn-danger btn-sm btn-delete">
                    <i class="fa fa-trash"></i> Excluir
                </a>
              </td>
            </tr>
          @endforeach
      </table>

    </div>

    {!! $schedulings->render() !!}

@endsection
