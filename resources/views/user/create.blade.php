@extends('layout.admin')
	@section('content')

         <div class="container-fluid">
                <div id="msj"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Otorgar credeciales </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Otorgar Credenciales a: <strong>{{$people->paterno.' '.$people->materno.' '.$people->nombre }} </strong> 
                            </div>
                            <div class="panel-body">
                                 <div class="row">
                                    <form action="javascript:" name="regUser" >    
                                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="userId" value="{{$people->id}}">
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">

                                            <div class="form-group">
                                                <label for="">Cargo *</label>
                                                <input type="text" class="form-control" name="cargo" required="" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tipo de usuario</label> 
                                                <br>
                                                <label for="mas"><input type="radio" name="type_user"  id="mas" value="0" required="" checked> Usuario</label>
                                                <br>
                                                <label for="fem"><input type="radio" name="type_user"  id="fem" value="1" required=""> Administrador </label>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Usuario *</label>
                                                <input type="text" class="form-control" name="user" required="" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Contraseña *</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control"  id="pass" name="pass" placeholder="contraseña" aria-describedby="sizing-addon1" required="">
                                                    <span class="input-group-addon glyphicon glyphicon-eye-open" id="btn-view"></span>  
                                                </div>
                                            </div>
                                        </div> 
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Registrar</button>
                                                <button type="reset"  class="btn btn-primary pull-right">Limpiar</button>
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
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.js')}}"></script>
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>
     <script src="{{ asset('sysitic/js/us.create.js')}}"></script>
    @endsection