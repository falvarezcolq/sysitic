@extends('layout.admin')

@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laboratorio: Limpieza y observación</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Seleciona laboratorio
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                                    <div class="col-xs-6"><label for="selectLab" class="pull-right">Laboratorio</label></div>
                                    <div class="col-xs-6">
                                        <select name="selectLab" id="selectLab" class="form-control">
                                            <option value="0" selected="">Seleccione..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                Limpieza del laboratorio <strong><span id="labSelected">Elige laboratorio</span></strong> 
                            </div>
                            <div class="panel-body">
                                <form action="javascript:">
                                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <p> El laboratorio <strong><span id="labSelected2">Elige laboratorio</span></strong> esta: </p>
                                       
                                        <label class="radio-inline"><input type="radio" name="optionRadioLimpieza" value="1" checked> limpio </label>
                                        <label class="radio-inline"><input type="radio" name="optionRadioLimpieza" value="0"> sucio </label>

                                        <button type="submit" class="btn btn-success" id="registro"> Reportar</button>

                                       <span id="resSuccess"  style="display:none" class="text-success"> Reportado con exito</span>

                                        <span id="resError" style="display:none" class="text-danger"> No hay conexion hay internet</span>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-heading">
                                Observación
                            </div>  
                            <div class="panel-body">
                                <form action="javascript:" class="">
                                <input type="hidden" name="_token" id="token2" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <p> Observacion al laboratorio <strong><span id="labSelected3">Elige laboratorio</span></strong> </p>
                                        <textarea class="form-control" name="obslab" id="obslab" cols="30" rows="5" placeholder="Escribe la observación al laboratorio"></textarea>
                                        <span id="resSucObs" class="text-success"> Reportado con exito a horas</span>

                                        <span id="resErrorObs" class="text-danger"> No hay conexion hay internet</span>
                                        <!-- <span id="mensaje" class="text-warning"> Se ha reportado bien</span> -->
                                        <div class="msjObs"></div>
                                    </div>

                                     <button type="submit" class="btn btn-success" id="btn-observation">Reportar</button>
                                     <button type="reset" class="btn btn-primary">Limpiar</button>
                                     
                                </form>

                                <div id="mensajes"></div>   
                            </div>
                        </div>
                    </div>
                </div>
</div>

<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reporte de limpieza</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Seleciona laboratorio
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <input type="hidden" name="_token" id="token3" value="{{ csrf_token()}}">
                                    <div class="col-xs-6"><label for="selectLab" class="pull-right">Laboratorio</label></div>
                                    <div class="col-xs-6">
                                        <select name="selectLab2" id="selectLab2" class="form-control">
                                            <option value="0" selected="">Seleccione..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="panel-heading">
                                Detalle
                            </div>  
                            <div class="panel-body">
                            <table class="table table-striped table-advance table-hover">
                                            <tbody id="tableCleaning">
                                                <tr>
                                                    <th> Fecha</th>
                                                    <th> Laboratorio</th>
                                                    <th> Estado</th>
                                                </tr>

                                                <tr>
                                                    <td>01/05/2018</td>
                                                    <td>Lab. Base de Datos</td>
                                                    <td>Limpio</td>
                                                    
                                                </tr>  

                                                <tr>
                                                    <td>30/05/2018</td>
                                                    <td>Lab. Base de datos</td>
                                                    <td>Sucio</td>
                                                    
                                                </tr> 
                                                             
                                            </tbody>
                                         </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>

<!-- INICIO SECCION DE REPORTE DE OBSERVACIONES -->
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reporte de Observaciones</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Seleciona laboratorio
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                                    <div class="col-xs-6"><label for="selectLab" class="pull-right">Laboratorio</label></div>
                                    <div class="col-xs-6">
                                        <select name="selectLab" id="selectLab" class="form-control">
                                            <option value="0" selected="">Seleccione..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="panel-heading">
                                Lista Detallada
                            </div>  
                            <div class="panel-body">
                            <table class="table table-striped table-advance table-hover">
                                            <tbody id="tableCleaning">
                                                <tr>
                                                    <th> Fecha</th>
                                                    <th> Laboratorio</th>
                                                    <th> Observacion</th>
                                                </tr>

                                                <tr>
                                                    <td>31/05/2018</td>
                                                    <td>Lab. Telematica</td>
                                                    <td>Pantalla negra en 4 maquinas</td>
                                                    
                                                </tr>   
                                                             
                                            </tbody>
                                         </table>
   
                            </div>
                        </div>
                    </div>
                </div>
</div>



@endsection

@section('scripts')
    <script src="{{ asset('sysitic/js/cleanLaboratory.js')}}" ></script>
@endsection