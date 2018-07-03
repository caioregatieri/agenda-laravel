@extends('template')

@section('title')
Pacientes
@endsection

@section('content')

@if($errors->any())
  <div class="alert alert-danger" role="alert">
    <strong>Whoops!</strong> Algo de errado aconteceu.<br><br>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Editando</h3>
  </div>
  <div class="panel-body">

    {!! Form::model($patient, ['route'=>['patients.update', $patient->id], 'method'=>'post']) !!}

      @include('patients._form')

      <div class="col col-md-12">
        <a href="{{ route('patients.index') }}" class="btn btn-default"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Voltar</a>
        <button type="submit" class="btn btn-success btn-save"><i class="fa fa-check"></i> Salvar</button>
      </div>

    {!! Form::close() !!}
  </div>
</div>

@endsection
