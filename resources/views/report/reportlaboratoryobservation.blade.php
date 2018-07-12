@extends('layout.admin')
@section('content')

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
                        <input type="hidden" name="_token" id="token4" value="{{ csrf_token()}}">
                            <div class="col-xs-6"><label for="selectLab" class="pull-right">Laboratorio</label></div>
                            <div class="col-xs-6">
                                <select name="selectLab3" id="selectLab3" class="form-control">
                                    <option value="0" selected="">Todos los laboratorios</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="panel-heading">
                        Detalle
                    </div>  
                    <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th> Fecha</th>
                                <th> Código</th>
                                <th> Laboratorio</th>
                                <th> Observacion</th>
                            </tr>
                        </thead>
                        <tbody id="tableObservation"></tbody>
                    </table>
                        <div id="msjLabObservation"></div>       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('sysitic/js/reportLaboratoryObservation.js')}}" ></script>
@endsection