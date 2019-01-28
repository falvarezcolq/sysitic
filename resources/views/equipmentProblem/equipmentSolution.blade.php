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
                                <div class="col-lg-6">
                                    <div class="panel-info">
                                        <div class="panel-heading">Descripción</div>  
                                        <div class="panel-body"> 
                                            
                                            <div class="input-group">
                                                <textarea type="text" id="desc-prob" class="form-control" placeholder="Ingrese descripción"  value="" col="10" row="3">{{$equipment->desc}}</textarea>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button" title="Actualizar" onclick="desc_update(this)" value="{{$equipment->id}}"><span class="glyphicon glyphicon-pencil"></span></button>
                                                </span>
                                            </div><!-- /input-group -->                                           
                                        </div> 
                                   </div>

                                   <div class="panel-info">
                                        <div class="panel-heading">Aplicar Solucion</div>
                                        <div class="panel-body">
                                               <form action="javascript:">
                                                    <div class="form-group">
                                                        <label for="id_sol">Elije solución</label>
                                                        <select name="id_sol" id="id_sol" class="form-control">
                                                        @foreach($equipment->standarProblem->solutions as $solution)
                                                           <option value="{{$solution->id}}">
                                                           <!-- {{$solution->problemType->name}}  -->
                                                           {{$solution->descripcion}}
                                                           </option>
                                                        @endforeach            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="desc_sol">Descripcion de la solución</label>
                                                        <textarea name="desc_sol" id="desc_sol" cols="10" rows="3" class="form-control" placeholder="(opcional)"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-warning" onclick="applySolutionNew(this)">Aplicar solución</button>
                                                    </div>
                                               </form> 
                            
                                        </div>
                                   </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label for="problempc"  style="display:none;">Posibles soluciones</label>
                                        <div class="frameOverflow-large"style="display:none;">
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
