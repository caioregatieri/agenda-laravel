
<div class="form-group">
  {!! Form::label('name','Nome:') !!}
  {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email','E-mail:') !!}
  {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('password','Senha:') !!}
  {!! Form::password('password', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('password_confirm','Confirme a senha:') !!}
  {!! Form::password('password_confirm', ['class'=>'form-control']) !!}
</div>
