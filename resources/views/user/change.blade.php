@extends('layout.admin')
	@section('content')

         <div class="container-fluid">
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
                               Actualizar Usuario y contraseña de <strong>{{$user->people->paterno.' '.$user->people->materno.' '.$user->people->nombre }} </strong> 
                            </div>
                            <div class="panel-body">
                                 <div class="row">
                                    <form action="javascript:" name="regUserSec" >    
                                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="userId" value="{{$user->people->id}}">
                                        
                                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">

                                            <div class="form-group">
                                                <label for="">User</label>
                                                <input type="text" class="form-control" name="user" required="" value="{{$user->user}}" >
                                            </div>
                                            <div class="form-group">
                                               <label for="">Contraseña</label>
                                               <div class="input-group">
                                                    <input type="password" class="form-control"  id="pass" name="pass" placeholder="contraseña" aria-describedby="sizing-addon1" required="">
                                                    <span class="input-group-addon glyphicon glyphicon-eye-open" id="btn-view"></span>  
                                                </div>
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