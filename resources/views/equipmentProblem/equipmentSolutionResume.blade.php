
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Resumen de la solucion aplicada</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <i class="fa fa-wrench fa-fw"></i> 
                        Solucion aplicada al equipo: <strong> {{$equipment->equipment->cod_itic}}</strong>, 
                         <strong>{{$equipment->equipment->cod_pc}}</strong>  del  <strong>{{$equipment->equipment->laboratory->nombre_lab}}</strong></div>
                        <div class="panel-body">

                            <div class="row">
                                
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
                                                    <tr><td>Hora del reporte</td> <td>{{$equipment->timereport}}</td><td></td></tr>
                                                    <tr><td>Descripción</td>      <td>{{$equipment->desc}}</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Soluci&oacute;n aplicada</div>     
                                        <div class="table-responsive table-bordered">
                                            <table class="table">
                                                <tbody>
                                                    <tr><td>Descripci&oacute;n: </td>    <td>{{$equipment->solution->descripcion}}</td><td></td></tr>
                                                    <tr><td>Categor&iacute;a:</td>      <td>{{$equipment->solution->problemType->name}}</td><td></td></tr>
                                                    <tr><td></td>    <td></td><td></td></tr>
                                                    <tr><td>Solucionado por:</td>  <td>{{$equipment->solutionUser->people->nombre.' '.$equipment->solutionUser->people->paterno }}</td><td></td></tr>
                                                    <tr><td>Hora de la soluci&oacute;n:</td>        <td>{{$equipment->timesolution}}</td><td></td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                   </div>
                                </div>
                            </div>  

                            <div class="row">
                                <div class="col-lg-12">   
                                    <div id="res" class="text-success"> 
                                         <h2>{{$equipment->solution->descripcion}}</h2>
                                    </div>
                                    <br>
                                    <button type="reset" class="btn btn-info" onclick ="loadLast()" > Editar</button>
                                    <button  class="btn btn-warning"  onclick="discard()" >Descartar soluci&oacute;n</button>
                                    <button  class="btn btn-danger" onclick="closeModal()">Salir </button>
                                    @if(Auth::user()->is_admin)
                                    <button  class="btn btn-danger pull-right" onclick="deleteEquipmentProblem()">Eliminar </button>
                                    @endif
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                </div>
            </div>