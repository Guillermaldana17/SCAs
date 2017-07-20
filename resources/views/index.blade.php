@extends('layouts.principal')
@include('alerts.error')
@include('alerts.request')
@section('content')
    {!! Form::open(['route'=>'log.store','method'=>'POST','class'=>'login-form']) !!}
<div class="form-group">

    {!!Form::label('correo','Correo:')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
</div>
<div class="form-group">
    {!!Form::label('contrasena','Contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
</div>
{!!Form::submit('Iniciar',['class'=>'btn btn-primary','style'=>'width:100%'])!!}
{!! Form::close() !!}
    @stop
