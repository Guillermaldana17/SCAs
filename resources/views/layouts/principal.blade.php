<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCAs | Sistema de control de accesos</title>

    <!-- CSS -->
   {!! Html::style('public/assets/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('public/assets/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style ('public/assets/assets/css/form-elements.css')!!}
    {!! Html::style('public/assets/css/style.css') !!}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">



    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="public/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body style="background-image: url('public/assets/img/fondo.png'); background-size: cover;">

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>SCAs</strong> Login</h1>
                    <div class="description">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Iniciar sesion</h3>
                            <p>Inserte su correo y contraseña para ingresar:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
{!! Html::script('public/assets/js/jquery-1.11.1.min.js') !!}
{!! Html::script('public/assets/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('public/assets/js/jquery.backstretch.min.js') !!}
{!! Html::script('public/assets/js/scripts.js') !!}
{!! Html::script('public/assets/js/placeholder.js') !!}

<!--[if lt IE 10]>

<![endif]-->

</body>

</html>