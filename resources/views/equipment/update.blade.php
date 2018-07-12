@extends('layout.admin')
	@section('content')
            <div class="container-fluid">
               
               <div id="msj"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laboratorio: Registrar nuevo Equipo</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Formulario de registro de nuevo del nuevo equipo de computación
                            </div>
                            <div class="panel-body">
                                <form action="javascript" class="form">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                                    <div class="form-group">
                                        <label for="codItic">CodItic</label>
                                        <input type="text" id="codItic" name="codItic" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="codItic">CodItic</label>
                                        <input type="text" id="codItic" name="codItic" class="form-control">
                                    </div>

                                    <select name="laboratories" id="laboratories" class="form-control">
                                        <option value="0">Seleccionar laboratorio..</option>
                                    </select>
                                    <div class="form-group"> 
                                        <button type="submit" class="btn btn-success">Registrar Equipo</button>
                                        <button type="reset" class="btn btn-primary">Limpiar</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/equipment.js')}}"></script>
    @endsection