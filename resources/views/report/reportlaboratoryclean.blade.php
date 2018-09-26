@extends('layout.admin')

@section('content')

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
                                    <option value="0" selected="">Todos los laboratorios</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="panel-heading">
                        Detalle
                    </div>  
                    <div class="panel-body">
                        <div id="cleaningTable"></div>
                        <div id="msjLabClean"></div>       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('sysitic/js/reportLaboratoryclean.js')}}" ></script>
@endsection