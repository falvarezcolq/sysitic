@extends('layout.admin')

@section('content')

            
            
           <!-- END LISTA DE PROBLEMAS DE EQUIPOS -->
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Adicionar nueva Soluci&oacute;n a un Problema</h1>
                </div>
            </div>
                 

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" id="panelSolution">
                        <div class="panel-heading" >
                            
                                <label for="standarProblems">Agregar solución al problema:</label>  <strong><span id="nameNewProblem" class="text-success"></span></strong> 
                                <select name="standarProblems" id="standarProblems" class="form-control" ><option value="0">Seleccione problema standar..</option></select> 
                            
                            </form>
                        </div>
    
                        <div class="panel-body">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Solución del problema</th>
                                        <th>Tipo</th>
                                        <th>Adicionar</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_new_problem">
                                    <tr>
                                        <td>1</td>
                                        <td><textarea name="problema" id="textSolution" cols="10" rows="1" class="form-control"></textarea></td>
                                        
                                        <td>
                                            <select name="listTypes" id="listTypes" class="form-control">
                                                <option value="0">Seleccione</option> 
                                            </select>
                                           
                                        </td>
                                        <td> <div><button id="buttonAdd" class="btn btn-info btn-circle" onclick="add_row_table(this)"><i class="fa fa-plus"></i></button></div></td>
                                    </tr>
                                </tbody>

                            </table>
                           
                            <div class="text-danger" id="msjNewSolution"></div>
                            <table  class="table table-striped table-bordered" >
                                <tbody id="tableSolution"></tbody>
                            </table>
                            

                        </div>
                    </div>
                </div>
            </div>


<!--BEGIN MODAL-->
<input id="mostrar-modal" name="modal" type="radio" /> 
<input id="cerrar-modal" name="modal" type="radio" />
 

<div id="modal">
<label for="cerrar-modal" id="cerrar-modal-label"> X </label> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="page-header">Actualizar Solución de del problema </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="ventana">
            <div class="panel panel-default">
                <div class="panel-heading">Problema:
                   
                        <label for="" id="nameProblem"></label>
                    
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                           
                            <form action="javascript:">
                               
                                <div class="form-group">
                                    <label for="">Soluci&oacute;n</label>
                                    <input type="text" class="form-control" id="descSolution" >
                                </div>
                                <div class="form-group">
                                    <label for="">Tipo</label>
                                    <select name="listTypes2" id="listTypes2" class="form-control">
                                         <option value="0">Seleccione</option> 
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" id ="updateBtn">Actualizar Soluci&oacute;n</button>
                                    <button class="btn btn-danger" onclick="closeModal()" >Atras</button>
                                    
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
    <script src="{{ asset('/sysitic/js/addProblem.js')}}"></script>
    <script src="{{ asset('/asset/dist/js/modal.js')}}"></script>
    
@endsection