@extends('layout.admin')

@section('content')

            
            
           <!-- END LISTA DE PROBLEMAS DE EQUIPOS -->
           <div class="row">
                <div class="col-lg-12">
                    <div id="msj"></div>
                    <h1 class="page-header">Adicionar nuevo problema</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Adicionar nuevo problema estandar de computadora. El problema no debe tener ambig&#252;edad</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                <form action="javascript:" class="form">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                                        <label for="">Descripci&oacute;n del problema</label>
                                        <textarea name="descriptionProblem" id="descriptionProblem" cols="20" rows="3" class="form-control" placeholder="Describe el problema" required></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="">Tipo de problema</label>
                                        <select name="problemType" id="problemType" class="form-control">
                                            <option value="0">Seleccione</option>
                                        </select>
                                    </div>
                                    <div id="msjClean"></div>
                                    <button type="submit" class="btn btn-success" id="button_Registrar">  Registrar nuevo problema para equipos</button>
                                    <button type="reset" class="btn btn-primary" id="button_reset">Limpiar </button>
                                </form>


                                

                                <div>
                                   
                                </div>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
        

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default hidden" id="panelSolution">
                        <div class="panel-heading" >Agregar solución al nuevo problema: <strong><span id="nameNewProblem" class="text-success"></span></strong>    </div>
    
                        <div class="panel-body">
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
                                        <td>
                                            <textarea name="problema" id="textSolution" cols="10" rows="1" class="form-control" placeholder ="Adicionar soluci&oacute;n"></textarea>
                                        </td>
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
@endsection

@section('scripts')
    <script src="{{ asset('/sysitic/js/addProblem.js')}}"></script>
@endsection