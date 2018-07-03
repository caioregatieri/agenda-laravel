{!! Form::hidden('user_id', Auth::user()->id, null) !!}

<div class="form-group">
  {!! Form::label('patient_id','Paciente:') !!}
  {!! Form::select('patient_id', $patients, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('doctor_id','Médico:') !!}
  {!! Form::select('doctor_id', $doctors, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('date','Data:') !!}
  {!! Form::date('date', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('time','Hora:') !!}
  {!! Form::text('time', null, ['class'=>'form-control input-hour']) !!}
</div>

<div class="form-group">
  {!! Form::label('status','Situação:') !!}
  {!! Form::select('status', $status, null, ['class'=>'form-control']) !!}
</div>
