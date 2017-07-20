<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SCAs | Sistema de Control de Accesos</title>

    {!!Html::style('public/vendor/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('public/vendor/metisMenu/metisMenu.min.css')!!}
    {!!Html::style('public/dist/css/sb-admin-2.css')!!}
    {!!Html::style('public/vendor/morrisjs/morris.css')!!}
    {!!Html::style('public/vendor/font-awesome/css/font-awesome.min.css')!!}


    {!!html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') !!}
    {!!html::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Sistema de Control de Accesos</a>
        </div>
        <!-- /.navbar-header -->


        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <hr/>
                    <li>
                        <a href="{!! URL::to('/accesos') !!}"><i class="fa fa-dashboard fa-fw"></i> Control de Accesos<span class="fa arrow"></span></a>

                    </li>
                    <li>
                        <a href="{!! URL::to('/Usuario/') !!}"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!! URL::to('/Usuario/create') !!}"><i class ="glyphicon glyphicon-plus"></i> Agregar usuario</a>
                            </li>
                            <li>
                                <a href="{!! URL::to('/Usuario/') !!}"><i class ="glyphicon glyphicon-th-list"></i> Usuarios</a>
                            </li>

                        </ul>
                     <li>
                        <a href="{!!URL::to('/logout')!!}"><i class ="glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>


                </ul>
            </div>

        </div>

    </nav>


                    <div id = 'page-wrapper'>
                    @yield('content')
                    </div>

</div>

    {!!html::script('public/vendor/jquery/jquery.min.js') !!}
    {!!html::script('public/vendor/metisMenu/metisMenu.min.js') !!}
    {!!html::script('public/vendor/bootstrap/js/bootstrap.min.js') !!}
    {!!html::script('public/vendor/raphael/raphael.min.js') !!}
    {!!html::script('public/vendor/morrisjs/morris.min.js') !!}
    {!!html::script('public/dist/js/sb-admin-2.js') !!}





</body>

</html>
