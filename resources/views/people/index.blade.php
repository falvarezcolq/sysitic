@extends('layout.admin')

	@section('content')


         <div class="container-fluid">
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
                            <div class="panel-body table-responsive" id="peopleTable">
                                
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
<div id="msj"></div>

<div class="container" id="updateForm">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Actualizar información </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Formulario para actualizar la información de una persona  
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="javascript:" name="reg" >    
                                <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                    <label for="">Nombres *</label>
                                    <input type="text" class="form-control" name="nombre" required="" >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                    <label for="">Apellido paterno *</label>
                                    <input type="text" class="form-control" name="paterno" required="" >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                    <label for="">Apellido materno * </label>
                                    <input type="text" class="form-control" name="materno" required="" >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                    <label for="">C.I. *</label>
                                    <input type="text" class="form-control" name="ci" required="" >
                                    </div>
                                </div>

                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                    <label for="">Fecha de nac "dd/mm/aaaa *</label>
                                    <input type="text" class="form-control" name="fecha_nac" value="01/01/1980" required=""  placeholder="Ej: 01/01/1980" >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="">G&eacute;nero</label>
                                        <br>
                                        <label for="mas"><input type="radio" name="genero"  id="mas" value="1" required="" checked> Masculino</label>
                                        <br>
                                        <label for="fem"><input type="radio" name="genero"  id="fem" value="0" required=""> Femenino </label>
                                    </div> 
                                </div>
                            
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-10">
                                    <div class="form-group">
                                    <label for="">Correo electr&oacute;nico *</label>
                                    <input type="email" class="form-control" name="email" required="" >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="form-group">
                                    <label for="">Telefono fijo</label>
                                    <input type="text" class="form-control" name="telfijo"  >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="form-group">
                                    <label for="">Telefono celular * </label>
                                    <input type="text" class="form-control" name="telcelular" required="" >
                                    </div>
                                </div> 
                                <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                    <div class="form-group">
                                        <label for="">Direcci&oacute;n</label>
                                        <input type="text" class="form-control" name="direccion" >
                                    </div>
                                </div>

                                <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                    <div class="form-group">
                                    <label for="">Profesi&oacute;n</label>
                                    <input type="text" class="form-control" name="profesion" >
                                    </div>
                                </div>
                
                                <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" id="update-people">Actualizar</button>
                                        <a href="javascript:closeModal()" class="btn btn-danger" >Salir</a>
                                        <small>(*) Campos obligatorios </small> 
                                        <a href="javascript:delPeople()" class="btn btn-danger pull-right">Eliminar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
</div>
<div class="container" id="show"       style="display:none" ></div>
<div class="container" id="updateCred" style="display:none" >
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Actualizar credenciales </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Actualizar Credenciales a: <strong id="updateUs" > </strong> 
                            </div>
                            <div class="panel-body">
                                 <div class="row">
                                    <form action="javascript:" name="regUserUpdate" >    
                                       
                                        <input type="hidden" name="upUserId" value="">
                                        
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">

                                            <div class="form-group">
                                                <label for="">Cargo *</label>
                                                <input type="text" class="form-control" name="upCargo" required="" value="" >
                                            </div>
                                            <div class="form-group" id="type_user">
                                                <label for="">Tipo de usuario</label> 
                                                <br>
                                                <label for="update_type_u"><input type="radio" name="update_type_user"  id="update_type_u" value="0" required="" > Usuario</label>
                                                <br>
                                                <label for="update_type_a"><input type="radio" name="update_type_user"  id="update_type_a" value="1" required=""> Administrador </label>                                          
                                            </div> 
                                        </div> 
                                       
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                                <a href="javascript:closeModal()" class="btn btn-danger pull-right">Salir</a>
                                                <small>(*) Campos obligatorios </small> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<div class="container" id="updatePass" style="display:none">
<div id="msj"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Actuaizar Usuario y contraseña </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Actualizar Usuario y contraseña de <strong id="passUser" ></strong> 
                            </div>
                            <div class="panel-body">
                                 <div class="row">
                                    <form action="javascript:" name="regUserSec" >    
                                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="passUserId" value="">
                                        
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">

                                            <div class="form-group">
                                                <label for="">User</label>
                                                <input type="text" class="form-control" name="passU" required="" value="" >
                                            </div>
                                            <div class="form-group">
                                               <label for="">Contraseña</label>
                                               <div class="input-group">
                                                    <input type="password" class="form-control"  id="upPass" name="upPass" placeholder="contraseña" aria-describedby="sizing-addon1" required="">
                                                    <span class="input-group-addon glyphicon glyphicon-eye-open" id="btn-view"></span>  
                                                </div>
                                            </div> 
                                        </div> 
                                       
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                                <a href="javascript:closeModal()"  class="btn btn-danger pull-right">Salir</a>
                                                <small>(*) Campos obligatorios </small> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.js')}}"></script>
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>
     <script src="{{ asset('sysitic/js/people.index.js')}}"></script>
    @endsection