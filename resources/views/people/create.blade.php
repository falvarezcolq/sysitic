@extends('layout.admin')

	@section('content')


         <div class="container-fluid">
               
               <div id="msj"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Registrar nueva persona</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Formulario para registrar a una nueva persona  
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <form action="javascript:" name="reg" >    
                                        
                                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                        <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                            <div class="form-group">
                                            <label for="">Nombres * </label>
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
                                                <button type="submit" class="btn btn-success">Registrar</button>
                                                <button type="reset" class="btn btn-primary pull-right">Limpiar</button>
                                                <small>(*) Campos obligatorios </small> 
                                            </div>
                                        </div>
                                </form>

                                </div>
                            </div>
                            <div class="panel-footer">
                            <a href="{{url('/admin/users')}}">Ir a lista de usuarios</a>
                            </div>
                        </div>
                    </div>
                </div>
         </div>


	@endsection

	@section('scripts')
    
     <!-- <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/additional-methods.js')}}"></script>
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/additional-methods.min.js')}}"></script> -->
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.js')}}"></script>
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>
     <script src="{{ asset('sysitic/js/people.create.js')}}" ></script>
    @endsection