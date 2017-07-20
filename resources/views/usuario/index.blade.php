@extends('layouts.admin')
@include('alerts.success')
@section('content')

    <img src="public/img/us.jpg" class ='img-responsive' alt="Responsive image">
   <table class ='table'>
       <thead>
       <th style="text-align: center">Nombre</th>
       <th style="text-align: center">Email</th>

       <th>Operacion</th>
       </thead>
       @foreach($users as $user)
       <tbody>
       <td style="text-align: center">{{$user->name}}</td>
       <td style="text-align: center">{{$user->email}}</td>

       <td>
           {!! link_to_route('Usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary']) !!}

       </td>
       </tbody>
           @endforeach
   </table>
    {!! $users->render()!!}
    @stop
