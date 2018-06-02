@extends('layout.admin')

@section('content')

            
            
           <!-- END LISTA DE PROBLEMAS DE EQUIPOS -->
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Adicionar nuevo problema</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Adicionar nuevo problema estandar de computadora</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                     <form action="" class="form">
                                <div class="form-group">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                                    <label for="">Descripci&oacute;n del problema</label>
                                    <textarea name="descriptionProblem" id="descriptionProblem" cols="20" rows="3" class="form-control" placeholder="Describe el problema" required></textarea>
                                </div>
                                <div class="form-group" >
                                    <label for="">tipo de problema</label>
                                    <select name="problemType" id="problemType" class="form-control">
                                        <option value="0">Seleccione</option>
                                    </select>
                                </div>
    
                                <div>
                                        <p class="text-danger">Agregar solución al nuevo problema</p>
                                </div>

                                <div>
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Solución del problema</th>
                                                <th>tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_new_problem">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <textarea name="" id="descripcion" cols="10" rows="1" class="form-control"></textarea>
                                                </td>
                                                <td>
                                                
                                                    <select name="listTypes" id="listTypes" class="form-control">
                                                        <option value="0">Seleccione</option> 
                                                    </select>

                                                     <div id="button_add"><button class="btn btn-info btn-circle" onclick="add_row_table()"><i class="fa fa-plus"></i></button></div>
                                                </td>
                                            </tr>
                                            

                                        </tbody>
                                    </table>
                                </div>
                                <div id="button_Registrar">
                                    <button type="submit" class="btn btn-success">  Registrar nuevo problema para equipos</button>
                                </div>
                                
                                <button type="submit" class="btn btn-danger">Salir </button>
                            </form>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')
    <script src="{{ asset('/sysitic/js/addProblem.js')}}"></script>
@endsection