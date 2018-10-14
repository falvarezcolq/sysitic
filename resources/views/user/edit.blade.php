@extends('layout.admin')
	@section('content')

         <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div id="msj"></div>
                        <h2 class="page-header">Actualizar credenciales </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Actualizar Credenciales a: <strong>{{$user->people->paterno.' '.$user->people->materno.' '.$user->people->nombre }} </strong> 
                            </div>
                            <div class="panel-body">
                                 <div class="row">
                                    <form action="javascript:" name="regUserUpdate" >    
                                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="userId" value="{{$user->people->id}}">
                                        
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">

                                            <div class="form-group">
                                                <label for="">Cargo *</label>
                                                <input type="text" class="form-control" name="cargo" required="" value="{{$user->cargo}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tipo de usuario</label> 
                                                @if($user->is_admin == 0)
                                                <br>
                                                <label for="mas"><input type="radio" name="type_user"  id="mas" value="0" required="" checked> Usuario</label>
                                                <br>
                                                <label for="fem"><input type="radio" name="type_user"  id="fem" value="1" required=""> Administrador </label>
                                                @else
                                                <br>
                                                <label for="mas"><input type="radio" name="type_user"  id="mas" value="0" required=""> Usuario</label>
                                                <br>
                                                <label for="fem"><input type="radio" name="type_user"  id="fem" value="1" required="" checked> Administrador </label>
                                                
                                                @endif
                                            </div> 
                                        </div> 
                                       
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                                <a href="{{url('/admin/users')}}"  class="btn btn-danger pull-right">Cancelar</a>
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



	@endsection

	@section('scripts')
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.js')}}"></script>
     <script src="{{ asset('asset/vendor/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>
     <script src="{{ asset('sysitic/js/us.edit.js')}}"></script>
    @endsection