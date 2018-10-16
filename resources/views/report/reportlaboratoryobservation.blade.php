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
                        <div class="" id="observationTable"></div>
                        <div id="msjLabObservation"></div>       
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
                <h1 class="page-header">Editar observacion al laboratorio</h1>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar observaci&oacute;n del laboratorio:<span id="nameLaboratory"></span>
                </div>
                <div class="panel-body">
                    <form action="javascript:">
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for=""> Descripci&oacute;n</label>
                            <textarea type="text" name="description" id="description" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success" onclick="updateObservation(this)" id="updateObs" >Actualizar</button>
                            <button onclick="closeModal()" class="btn btn-danger">salir</button>
                            @if(Auth::user()->is_admin)
                            <button class="btn btn-danger pull-right" id="btn-delete-observation">Eliminar</button>
                            @endif
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
<script src="{{ asset('sysitic/js/reportLaboratoryObservation.js')}}" ></script>
@endsection