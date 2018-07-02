{!! Form::hidden('user_id', Auth::user()->id, ) !!}

<div class="form-group">
  {!! Form::label('patient_id','Paciente:') !!}
  {!! Form::text('patient_id', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('doctor_id','Médico:') !!}
  {!! Form::text('doctor_id', null, ['class'=>'form-control input-phone']) !!}
</div>

<div class="form-group">
  {!! Form::label('date','Data:') !!}
  {!! Form::text('date', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('status','Situação:') !!}
  {!! Form::text('status', null, ['class'=>'form-control']) !!}
</div>
