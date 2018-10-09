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



<!--BEGIN MODAL-->
<input id="mostrar-modal" name="modal" type="radio" /> 
<input id="cerrar-modal" name="modal" type="radio" />
<div id="modal">
    <label for="cerrar-modal" id="cerrar-modal-label"> X </label> 
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div id="msj"></div>
                <h1 class="page-header">Editar limpieza del laboratorio</h1>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar limpieza del laboratorio:<span id="nameLaboratory"></span>
                </div>
                <div class="panel-body">
                    <form action="javascript:">
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Laboratorio</label>
                            <select name="selectLabEdit" id="selectLabEdit" class="form-control">                                    
                            </select>
                        </div>

                        <div class="form-group">
                                Estado de limpieza
                                <label class="radio-inline"><input type="radio" name="optionRadioLimpieza" value="1" checked> limpio </label>
                                <label class="radio-inline"><input type="radio" name="optionRadioLimpieza" value="0"> sucio </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success" onclick="updateCleaning(this)" id="updateClean" >Actualizar</button>
                            <button onclick="closeModal()" class="btn btn-danger">salir</button>
                            <button class="btn btn-danger pull-right" id="btn-delete-cleaning">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END MODAL-->

@endsection

@section('scripts')
<script src="{{ asset('sysitic/js/reportLaboratoryClean.js')}}" ></script>
@endsection