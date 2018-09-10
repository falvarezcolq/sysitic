@extends('layout.admin')

	@section('content')


         <div class="container-fluid">
               
               <div id="msj"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lista de Personas registradas </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Lista de personas registradas:

                              <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="searchName" placeholder="Buscar Persona" >
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <a href="{{url('admin/users/create')}}" class="btn btn-primary btn-sm"><span></span><i class="fa fa-laptop "></i> Agregar nueva persona </span></a>
                                    </div>
                                </div>
                                  
                              </div>
                               
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>usuario</th>
                                        <th>Nombre</th>
                                        <th>Telf/cel</th>
                                        <th>Email</th>
                                        <th>Profesion</th>
                                        <th>Aciones</th>
                                    </thead>
                                    <tbody id="peoplelist">
                                       @foreach($people as $pe)
                                        <tr>
                                            @if($pe->user == null)
                                                <td>Sin accesos</td>
                                            @elseif($pe->user->is_admin == 1)
                                                <td>Administrador</td>
                                            @elseif($pe->user->is_admin == 0)
                                                <td>Usuario</td> 
                                            @else 
                                                <td>Sin permisos</td>   
                                            @endif

                                            <td>{{$pe->paterno.' '.$pe->materno.' '.$pe->nombre}}</td>
                                            <td>{{$pe->telfijo.' '.$pe->telcelular}}</td>
                                            <td>{{$pe->email}}</td>
                                            <td>{{$pe->profesion}}</td>
                                            
                                            <td>    
                                                <div class="btn-group" role="group">
                                                    <button value="{{$pe->id}}" class="btn btn-xs btn-warning btn-secondary" onclick="editPeople(this)">Editar</button>
                                                    <button value="{{$pe->id}}" class="btn btn-xs btn-primary btn-secondary" onclick="showPeople(this)">Ver</button>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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