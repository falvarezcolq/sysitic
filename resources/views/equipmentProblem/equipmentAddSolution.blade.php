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
                            <label for="standarProblems">Agregar solución al problema:</label>  <strong><span id="nameNewProblem" class="text-success">{{$standarProblem->descripcion}}</span></strong> 
                        </div>
    
                        <div class="panel-body">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Solución del problema</th>
                                        <th>Tipo</th>
                                        <th>Adicionar</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_new_problem">
                                    <tr>
                                        <td><textarea name="problema" id="textSolution" cols="10" rows="1" class="form-control"></textarea></td>
                                        <td>
                                            <select name="listTypes" id="listTypes" class="form-control">
                                                <option value="0">Seleccione</option> 
                                                @foreach($problemTypes as $problemType)
                                                <option value="{{$problemType->id}}">{{$problemType->name}}</option> 
                                                @endforeach
                                            </select>
                                        </td>
                                        <td> <div><button id="buttonAdd" value="{{$standarProblem->id}}" class="btn btn-info btn-circle" onclick="add_row_table(this)"><i class="fa fa-plus"></i></button></div></td>
                                    </tr>
                                </tbody>

                            </table>
                            <div class="text-danger" id="msjNewSolution"></div>
                            <table  class="table table-striped table-bordered" >
                                <tbody id="tableSolution"></tbody>
                            </table>
                            <button class="btn btn-primary"  onclick="loadLast()" >Atras</button>

                        </div>
                    </div>
                </div>
            </div>
