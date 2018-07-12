@extends('layout.admin')

	@section('content')


         <div class="container-fluid">
               
               <div id="msj"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lista de equipos registrados por laboratorios</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Elije laboratorio:
                               <select name="laboratories" id="laboratories" class="form-control"><option value="0">Todos los Equipos</option></select>
                               <div class="form-group">
                               <a href="{{url('equipment/create')}}" class="btn btn-primary"><span></span><i class="fa fa-laptop "></i> Nuevo equipo </span></a>
                               </div>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Laboratorio</th>
                                        <th>Código Itic</th>
                                        <th>Código PC</th>
                                        <th>Fecha de creacion</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody id="equipments">
                                    <tr><td></td><td></td><td></td><td></td><td><button class="btn btn-primary">Editar</button></td></tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
		
	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/equipment.index.js')}}"></script>
    @endsection