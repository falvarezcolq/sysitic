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
                                <form action="">
                                    
                                    <div class="form-group">
                                        <p> El laboratorio <strong><span id="labSelected2">Elige laboratorio</span></strong> esta: </p>
                                        <label class="radio-inline"><input type="radio" name="optionRadioLimpieza" value="limpio"> limpio </label>

                                        <label class="radio-inline"><input type="radio" name="optionRadioLimpieza" value="sucio"> sucio </label>

                                        <button type="submit" class="btn btn-success"> Reportar</button>

                                       <span id="res" class="text-success"> Reportado con exito a horas 5:00 pm</span>

                                        <span id="res" class="text-danger"> NO hay conexion hay internet</span>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-heading">
                                Observación
                            </div>
                            <div class="panel-body">
                                <form action="" class="">
                                    <div class="form-group">
                                        <p> Observacion al laboratorio <strong><span id="labSelected3">Elige laboratorio</span></strong> </p>
                                        <textarea class="form-control" name="obslab" id="obslab" cols="30" rows="5" placeholder="Escribe la observación al laboratorio"></textarea>
                                        <span id="res" class="text-success"> Reportado con exito a horas <strong>5:00</strong> pm</span>

                                        <span id="res" class="text-danger"> NO hay conexion hay internet</span>
                                    </div>

                                     <button class="btn btn-success">Reportar</button>
                                     <button class="btn btn-primary">Limpiar</button>
                                     
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')
    <script src="{{ asset('sysitic/js/cleanLaboratory.js')}}" ></script>
@endsection