@extends('layout.admin')

@section('content')
   
   <ul>
       <li><a href="{{url('admin/laboratory')}}">Limpieza de laboratorio</a></li>
       <li><a href="{{url('admin/reportproblem')}}">Reportar problemas de equipos</a></li>
       <li><a href="{{url('admin/solutionproblem')}}">Solucionar problemas de los equipos</a></li>
   </ul>
@endsection