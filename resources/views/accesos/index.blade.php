@extends('layouts.admin')
@include('alerts.success')
@section('content')

    <img src="public/img/us.jpg" class ='img-responsive' alt="Responsive image" >

        <div class="row">
            <div class="col-xs-6"></div>
                <div class="col-xs-6">


            <h4 style="text-align: center">Totalidad de ingresos: {{ $contar }}</h4>
            <h4 style="text-align: center">Total de ingresos correctos: {{$contarc}}</h4>
            <h4 style="text-align: center">Total de ingresos incorrectos:{{$contarinc}} </h4>





            </div>
        </div>


    <table class ='table'>
        <thead>
        <th style="text-align: center">N°</th>
        <th style="text-align: center">IP</th>
        <th style="text-align: center">Fecha</th>
        <th style="text-align: center">Email</th>
        <th style="text-align: center">Ingreso</th>
        </thead>

        @foreach($accesoss as $accesos)
            <tbody>
            <td style="text-align: center">{{$accesos->id}}</td>
            <td style="text-align: center">{{$accesos->ip}}</td>
            <td style="text-align: center">{{$accesos->fecha_de_ingreso}}</td>
            <td style="text-align: center">{{$accesos->email}}</td>
            <td style="text-align: center">{{$accesos->descripcion}}</td>
            </tbody>
@endforeach
    </table>
{!! $accesoss->render() !!}
@stop
