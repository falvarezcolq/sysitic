@extends('layout.admin')

@section('content')
   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de problemas para equipos.</h1>
                </div>
            </div>
        <div class="row">
        <div class="col-md-12 " id="ventana">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de problemas para un equipo:
                    <div class=" input-group" class="float-right">
                        <input type="text" class="form-control" placeholder="Buscar problema" id="searchProblem">
                        <span class="input-group-btn">
                            <button class="btn btn-warning" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="frameOverflow">
                                <table class="table table-striped table-advance table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Descripcion</th>
                                            <th>Tipo de problem</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableProblems">
                                    </tbody>

                                </table>
                            </div>
                            
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ url('admin/addproblem')}}" class="btn btn-primary">Adicionar nuevo problema</a>
    
                        </div>
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
        <div class="row"><div class="col-lg-12">
            <div id="msj"></div>
        <h1 class="page-header">Editar problema estandar</h1> 
        </div>  </div>  
   
  
        <div class="row">
            <div class="col-lg-12 " id="ventana">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar:
                    </div>
                    <div class="panel-body">
                      <form action="javascript:">
                        <input type="hidden" name="_token"  id="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="">Descripci&oacute;n</label>
                            <textarea type="text" id="description" class="form-control" rows="5"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Tipo de problema</label>
                            <select name="selectType" id="selectType" class="form-control" >
                            </select>
                        </div>

                        <button class="btn btn-success" id="btn-update-problem">actualizar</button>
                        <button class="btn btn-danger" id="btn-exit" >salir</button>
                        <button class="btn btn-danger pull-right"id="btn-delete-problem" >Eliminar</button>
                      </form>  
                    </div>
                </div>
            </div>
        </div>

     </div>
        
</div>
<!--END MODAL-->


@endsection

@section('scripts')

  <script src="{{ asset('/sysitic/js/reportProblem.js') }}"></script>
  <script src="{{ asset('/sysitic/js/standarProblem.js') }}"></script>
  <script>
    $('#searchProblem').keyup(loadingStandarProblemFull);
    $(document).ready(function(){loadingStandarProblemFull(); });
    loadingProblemTypes();
  </script>
@endsection