            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Aplicar soluci&oacute;n</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <i class="fa fa-wrench fa-fw"></i> 
                            Aplicar solucion al equipo: <strong>{{$equipment->equipment->cod_itic}}</strong> ,  <strong>{{$equipment->equipment->cod_pc}}</strong>  del  <strong>{{$equipment->equipment->laboratory->nombre_lab}}</strong></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Problema reportado en el equipo</div>  
                                        <div class="panel-body"> 
                                            <h3>{{$equipment->standarProblem->descripcion}}</h3>
                                            Categoría: <strong>{{$equipment->standarProblem->problemType->name}}</strong>
                                        </div> 
                                   </div>
                                   <div class="panel-info">
                                        <div class="panel-heading">Descripción</div>  
                                        <div class="panel-body"> 
                                            <h5>{{$equipment->desc}}</h5>                                            
                                        </div> 
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">Detalles del equipo</div>     
                                        <div class="table-responsive table-bordered">
                                            <table class="table">
                                                <tbody>
                                                    <tr><td>Codigo ITIC:</td>    <td>{{$equipment->equipment->cod_itic}}</td><td></td></tr>
                                                    <tr><td>Codigo PC:</td>      <td>{{$equipment->equipment->cod_pc}}</td><td></td></tr>
                                                    <tr><td>Laboratorio:</td>    <td>{{$equipment->equipment->laboratory->nombre_lab}}</td><td></td></tr>
                                                    <tr><td>Reportado por:</td>  <td>{{$equipment->reportUser->people->nombre.' '.$equipment->reportUser->people->paterno }}</td><td></td></tr>
                                                    <tr><td>A horas:</td>        <td>{{$equipment->timereport}}</td><td></td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label for="problempc">Posibles soluciones</label>
                                        <div class="frameOverflow-large">
                                        <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                    <th> N&uacute;mero</th>
                                                    <th> Tipo</th>
                                                    <th> Soluciones </th>
                                                    <th> Acci&oacute;n </th>
                                                </tr>
                                                @foreach($equipment->standarProblem->solutions as $solution)
                                                    <tr>
                                                        <td>{{$solution->id}}</td>
                                                        <td>{{$solution->problemType->name}}</td>
                                                        <td>{{$solution->descripcion}}</td>
                                                        <td>
                                                            <button type="submit" class="btn btn-xs btn-warning" value="{{$solution->id}}" onclick="applySolution(this)"> Aplicar solucion </button> 
                                                        </td>
                                                    </tr>  
                                                @endforeach             
                                            </tbody>
                                        </table>
                                        </div>
                                        <button class="btn btn-info" value="{{$equipment->standarProblem->id}}" onclick="loadingNewSolution(this)">Nueva soluci&oacute;n</button>
                                        <button type="button" class="btn btn-danger" onclick="closeModal()">Salir </button>
                                        @if(Auth::user()->is_admin)
                                        <button class="btn btn-danger pull-right" onclick="deleteEquipmentProblem()">Eliminar </button>
                                        @endif
                                    </div>
                                </div>
                            </div>    
                            
                        </div>
                    </div>
                </div>
            </div>
