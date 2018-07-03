@extends('layout.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Solucionar Problemas de PC</h1>
        </div>
    </div>

 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> Solucionar problemas de PC</div>
            <div class="panel-body">
                <div class="row">
                    
                    <form action="javascript:">
                        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-lg-3" >
                            <label for="coditic">Codigo ITIC</label>
                            <input type="number" name="codItic" id="codItic" class="form-control" placeholder="ej: 123" >
                            <div id="msjCodItic"></div>
                        </div>

                        <div class="form-group col-lg-3">
                            <label for="codPc">Codigo informatica PC</label>
                            <input type="text" name ="codPc" id="codPc" class="form-control" placeholder="ej: LB-MT12">
                            <div id="msjCodPc"></div>
                        </div>
                        
                        <div class="form-group col-lg-3" >
                            <label for="coditic">Problema</label>
                            <select class="form-control"name="selectProblems" id="selectProblems">
                                <option value="0">Todos los problemas</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-3">
                            <label for="codpc">Laboratorio</label>
                            <select class="form-control" name="lab" id="selectLab">
                                <option value="0">Todos los laboratorios</option> 
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-warning" id="searchBtn">Buscar</button>
                            <button type="reset" class="btn btn-primary" id="resetBtn">Limpiar</button>
                        </div>
                    </form>

                    <div class="col-lg-12">
                        <div class="form-group ">
                            <label for="problempc">Equipos con problemas </label>
                            <div id="tableProblems"></div>
                            {{-- <button  class="btn btn-success">Aceptar</button>
                            <button type="submit" class="btn btn-danger">Salir </button>  --}}
                        </div>

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
        <div id="loadingFrame" ></div>

        <div id="newSolution" style="display:none">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Adicionar soluci&oacute;n</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar soluci&oacute;n de un problema </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="" class="form">
                            
                                <div class="col-lg-8">
                                    <div class="form-group ">
                                        <label>Descripci&oacute;n </label>
                                        <textarea name="descripcion" id="descripcion" class ="form-control" cols="10" rows="3"  placeholder="Patch core reemplazado" required></textarea>
                                        <br>
                                        <div class="form-group" >
                                            <label>Tipo soluci&oacute;n</label>
                                            <select class="form-control">
                                                <option>Hardware</option>
                                                <option>Software</option>
                                            </select>
                                        </div>
                                        <button  class="btn btn-success">Aceptar</button>
                                        <button type="reset" class="btn btn-danger"> Cancelar</button>    
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
    <script src="{{ asset('/sysitic/js/solutionProblem.js') }}"></script>
    <script src="{{ asset('/sysitic/js/addProblem.js') }}"></script>
@endsection