<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/AdminLTE.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/AdminLTE.css')}}" rel="stylesheet">
    <link href="{{ url('css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    
    
</head>

<body >

    <div class="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Gymnasio</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        @if(isset(Auth::user()->fullName))
                            {!! Auth::user()->fullName !!}
                        @endif
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                         <li>
                            <a href="#"><i class="fa fa-user"></i> Perfil<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/view')}}"><i class='fa fa-eye'></i> Ver</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/create')}}"><i class='fa fa-refresh'></i> Actualizar</a>
                                </li>
                            </ul>
                        </li>
                    
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Personas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-user'></i> Atletas</a>
                                </li>
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-user'></i> Profesores</a>
                                </li>
                            </ul>
                        </li>
                    
                        <li>
                            <a href="#"><i class="fa fa-calendar-o"></i> Calendario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-calendar'></i> Ver</a>
                                </li>
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-calendar'></i> Eventos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-globe"></i> Gestionar Ubicación<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-location-arrow'></i> Estado</a>
                                </li>
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-location-arrow'></i> Municipio</a>
                                </li>
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-location-arrow'></i> Parroquia</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-money"></i> Pagos y Renovación<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-location-arrow'></i> ...</a>
                                </li>
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-location-arrow'></i> ...</a>
                                </li>
                                <li>
                                    <a href="{{url('')}}"><i class='fa fa-location-arrow'></i> ...</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div class="content-wrapper">
            @yield('content')
        </div>

    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2016 <a href="">-Edinson Figueroa. Samuel Espinoza</a>.</strong>
    </footer>

    

    <!-- Otra forma de hacer referencia a la insercion de archivos
    para este habria que asignar una serie de elementos en unos archivos de laravel
     REVISAR laravelcollective.com PARA LA INSERSION DE ARCHIVOS-->
     {!!Html::script('js/jquery.min.js')!!}
     {!!Html::script('js/bootstrap.min.js')!!}
     {!!Html::script('js/metisMenu.min.js')!!}
     {!!Html::script('js/sb-admin-2.js')!!}
     {!!Html::script('js/app.min.js')!!}


     



     @section('script')
     @show

</body>

</html>
