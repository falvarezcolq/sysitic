@extends('layout.admin')

	@section('content')


         <div class="container-fluid">
               
              

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
                              <br>
                               <div class="form-group">
                               <a href="{{url('equipment/create')}}" class="btn btn-primary btn-sm"><span></span><i class="fa fa-laptop "></i> Nuevo equipo </span></a>
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
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>



<!--BEGIN MODAL-->
<input id="mostrar-modal" name="modal" type="radio" /> 
<input id="cerrar-modal" name="modal" type="radio" />
 
<div id="modal">
<label for="cerrar-modal" id="cerrar-modal-label"> X </label> 

<div class="container">
    
<div class="row">
                <div id="msj"></div>
                    <div class="col-lg-12">
                        <h1 class="page-header">Editar datos  del equipo </h1>
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
                                        <label for="">Laboratorio</label>
                                        <select name="laboratoriesUpdate" id="laboratoriesUpdate" class="form-control">
                                            <option value="0">Seleccionar laboratorio..</option>
                                        </select>
                                    </div>
                                    <div class="form-group"> 
                                        <button type="submit" id="btnEquipmentUpdate" class="btn btn-success">Actualizar datos del Equipo</button>
                                        <button class="btn btn-danger" onclick="closeModal()">Salir</button>
                                        <button class="btn btn-primary" id="btnReLoad" onclick="updateEquipment(this)" ><span class="fa fa-refresh"></span> Recargar</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>

        
</div>
<!--END MODAL-->


	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/equipment.index.js')}}"></script>
    @endsection