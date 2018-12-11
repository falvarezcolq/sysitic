<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de matenimiento ITIC">
    <meta name="author" content="FAC">

	<title>Admin</title>

	<link rel="stylesheet" href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}">

    <!--Hoja de estilo para la ventana modal de reportProblem-->
    <link href="{{ asset('asset/vendor/sysitic/css/modal.css')}}" rel="stylesheet">

	 <!-- MetisMenu CSS -->
    <link href="{{ asset('asset/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('asset/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="{{ asset('asset/vendor/morrisjs/morris.css')}}" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="{{ asset('asset/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- datepicker.css -->
    <link href="{{ asset('asset/vendor/datepicker/css/datepicker.css')}}" rel="stylesheet">


    <link href="{{ asset('sysitic/css/addstyle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('sysitic/css/tools.css')}}" rel="stylesheet" type="text/css">
    

    
    

</head>
<body>

	<div class="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistema de mantenimiento ITIC v1.05</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="index.html">{{Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno}}</a>
                </li>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>< /li> -->
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li> -->
                        <li class="divider"></li>
                        <li><a href="{{asset('auth/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i> inicio</a>
                        </li>

                        @if( Auth::user()->is_admin )
                        <li>
                            <a href="#">
                            	<i class="fa fa-bar-chart-o fa-fw"></i> Usuarios<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/users')}}"><i class="fa fa-chevron-right"></i> Ver usuarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        @endif
                        <li>
                            <a href="#"> <i class="fa fa-laptop fa-fw"></i>Laboratorios <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{url('admin/laboratory')}}"><i class="fa fa-chevron-right"></i>  Limpieza y observacion</a></li>
                                @if( Auth::user()->is_admin )
                                <li><a href="{{url('equipment')}}"><i class="fa fa-chevron-right"></i>  Equipos</a></li>
                                <li><a href="{{url('laboratory')}}"><i class="fa fa-chevron-right"></i>  Laboratorios</a></li> 
                                @endif     
                            </ul>
                        </li>

                         <li>
                            <a href="#">
                            	<i class="fa fa-industry fa-fw"></i> Mantenimiento<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('admin/reportproblem')}}" > <i class="fa fa-chevron-right"></i> Reportar problemas de PC</a></li>
                                @if(Auth::user()->is_admin)
                                    <li><a href="{{ url('admin/solutionproblem')}}"><i class="fa fa-chevron-right"></i> Solucionar problemas de PC</a></li>
                                @else
                                    <li><a href="{{ url('admin/solutionproblem')}}"><i class="fa fa-chevron-right"></i> ver mis reportes</a></li>
                                @endif
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Reportes <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('/admin/reportlaboratoryclean/')}}"><i class="fa fa-chevron-right"></i>Limpieza de Laboratorios</a></li>
                                <li><a href="{{ url('/admin/reportlaboratoryobservation/')}}"><i class="fa fa-chevron-right"></i>Observaci&oacute;n de laboratorios</a></li>
                                @if( Auth::user()->is_admin )
                                <!-- <li><a href="{{ url('')}}"><i class="fa fa-chevron-right"></i>Busqueda por fecha </a></li> -->
                                <!-- <li><a href="{{ url('')}}"><i class="fa fa-chevron-right"></i>Busqueda</a></li> -->
                                @endif
                            </ul>
                        </li>
                        @if( Auth::user()->is_admin )
                        <li>
                            <a href="#"><i class="fa fa-cog"></i>Configuraci&oacute;n</a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('standarproblem')}}"><i class="fa fa-chevron-right"></i>  Lista de problemas para equipos</a></li>
                                <li><a href="{{ url('admin/addsolution')}}"><i class="fa fa-chevron-right"></i>  Adicionar nueva soluci&oacute;n</a></li>
                                <li><a href="{{ url('reglog')}}"><i class="fa fa-chevron-right" ></i>Operaciones en el sistema</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

         <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
        
	</div>


<div class="myalert" id="alert-confirm" style="display:none;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 id="alert-confirm-title"></h4> 
        </div>
        <div class="panel-body">
            <h5 id="alert-confirm-body"></h5>
                <button class="btn btn-primary" name="confirm" id="alert-confirm-btn">Confirmar</button>
                <button class="btn btn-danger pull-right" name="exit" id="alert-exit-btn" >Cancelar</button>
        </div>  
    </div>
</div>


	<script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('asset/vendor/metisMenu/metisMenu.min.js')}}"></script>  
    <script src="{{ asset('asset/vendor/datepicker/js/bootstrap-datepicker.js') }}"></script>
 

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('asset/dist/js/sb-admin-2.js')}}"></script>
    <script src="{{ asset('asset/dist/js/itic.js')}}"></script>
    <script src="{{ asset('asset/dist/js/modal.js')}}"></script>
    <script src="{{ asset('sysitic/js/tools.js')}}"></script>
   
   

    @section('scripts')
    @show

</body>
</html>