
<div class="col col-md-6">
  <div class="form-group">
    {!! Form::label('name','Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-6">
  <div class="form-group">
    {!! Form::label('phone','Telefone:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control input-phone']) !!}
  </div>
</div>

<div class="col col-md-2">
  <div class="form-group">
    {!! Form::label('state','Estado:') !!}
    {!! Form::select('state', $states, null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-5">
  <div class="form-group">
    {!! Form::label('city','Cidade:') !!}
    {!! Form::text('city', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-5">
  <div class="form-group">
      {!! Form::label('neighborhood','Bairro:') !!}
      {!! Form::text('neighborhood', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-10">
  <div class="form-group">
    {!! Form::label('place','Logradouro:') !!}
    {!! Form::text('place', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-2">
  <div class="form-group">
    {!! Form::label('number','Numero:') !!}
    {!! Form::text('number', null, ['class'=>'form-control']) !!}
  </div>
</div>


