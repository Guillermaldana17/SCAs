<div class ='form-group'>
    {!! form::label('Nombre:') !!}
    {!! form::text('name',null,['class'=>'form-control','placeholder' =>'Ingrese su nombre']) !!}

</div>
<div class ='form-group'>
    {!! form::label('Correo:') !!}
    {!! form::email('email',null,['class'=>'form-control','placeholder' =>'Ingrese su email']) !!}
</div>

<div class ='form-group'>
    {!! form::label('Password:') !!}
    {!! form::password('password',['class'=>'form-control','placeholder' =>'Ingrese su Password']) !!}
</div>