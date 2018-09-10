@extends('layout.admin')
	@section('content')
            <div class="container-fluid">
               
               <div id="msj">
                </div>

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
                                <form action="javascript:" class="form">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                                    <div class="form-group">
                                        <label for="codItic">Codigo ITIC</label> 
                                        <input type="text" id="codItic" name="codItic" class="form-control">
                                        <div id="msjCodItic"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="codPc">Codigo PC</label>
                                        <input type="text" id="codPc" name="codPc" class="form-control">
                                        <div id="msjCodPc"></div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="laboratories">Laboratorio</label>
                                        <select name="laboratories" id="laboratories" class="form-control">
                                            <option value="0">Seleccionar laboratorio..</option>
                                        </select>
                                    </div>
                                   
                                    <div class="form-group"> 
                                        <button type="submit" id="btnEquipment" class="btn btn-success">Registrar Equipo</button>
                                        <button type="reset" class="btn btn-primary">Limpiar</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12"><a href="{{url('equipment')}}">Ir a lista de equipos</a></div>
                </div>
              
            </div>
            
           
	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/equipment.create.js')}}"></script>
    @endsection