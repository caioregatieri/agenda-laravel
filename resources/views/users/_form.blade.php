<div class="col col-md-6">
  <div class="form-group">
    {!! Form::label('name','Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-6">
  <div class="form-group">
    {!! Form::label('email','E-mail:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-6">
  <div class="form-group">
    {!! Form::label('password','Senha:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col col-md-6">
  <div class="form-group">
    {!! Form::label('password_confirmation','Confirme a senha:') !!}
    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
  </div>
</div>
