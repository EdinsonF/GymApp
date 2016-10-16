<!DOCTYPE html>
<html>
<head>
<title>Gym.App</title>

<link href="{{ url('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('css/AdminLTE.min.css')}}" rel="stylesheet">
<link href="{{ url('css/AdminLTE.css')}}" rel="stylesheet">
<link rel="stylesheet" href="plugins/iCheck/square/blue.css">

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- header-section-starts -->
    <div class="full">
            <div class="menu">
                <ul>
                    <li><a class="active" href="{{url('/')}}"><i class="home"></i></a></li>
                    <li><a href="{{url('gimnasios')}}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
                    <li><a href="{{url('contacto')}}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
                </ul>
            </div>
        <div class="main">
            <div class="header">
                <div class="top-header">
                    <div class="login-logo">
                        <a href="{{ url("/") }}"><b>Administración</b>.GymApp</a>
                    </div>

                </div>
                
                @yield('content')

            </div>

            <div class="footer">
                <h6>Aplicación de Gimnasios : </h6>
                <p class="claim">Desarrolladores: Edinson Figueroa. Samuel Espinoza.</p>
                <a href="example@mail.com"></a>
                
            </div>
        </div>  
    </div>

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('plugins/iCheck/icheck.min.js')!!}
    

    <script>
        $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
        });
    </script>
     
</body>
</html>