@extends('layouts.admin')
@section('content')

@include('alerts.request')
    {!! Form::open(['route'=>'Usuario.store','method' => 'POST'])!!}
        @include('usuario.forms.user')
    {!! Form::submit('Registrar',['class' =>'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop