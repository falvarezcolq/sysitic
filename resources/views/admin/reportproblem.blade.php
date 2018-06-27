@extends('layout.admin')

@section('content')

<!-- begin REPORTAR PROBLEMA -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Reportar problema</h1>
    </div>
</div>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Reportar problema de un equipo de computación</div>
            <div class="panel-body">
                <div class="row">
                    <form action="javascript:" class="form">

                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="form-group col-lg-6" >
                            <label for="coditic">Codigo ITIC</label>
                            <input type="number" name="codItic" id="codItic"class="form-control" placeholder="ej: 123">
                            <div id="msjCodItic"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="codpc">Codigo informatica PC</label>
                            <input type="text" name ="codpc" id="codpc" class="form-control" placeholder="ej: LB-MT12">
                            <div id="msjCodPc"></div>
                        </div>
                       
                        <div class="form-group col-lg-12">
                            <label for="">Problema del equipo</label>
                            <div class="input-group">
                                <div class="form-control" id="inputProblem"> 
                                <span id="problemSelected" class="text-info"></span>
                                </div>
                                <span class="input-group-addon"> 
                                    <label for="mostrar-modal" id="mostrar-modal-label"> 
                                        <span class="fa fa-search"></span> Seleccionar </label> 
                                </span>
                            </div>
                            <input type="hidden" name="problemId" id="problemId">
                        </div>
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-success"id="btnReportProblem"> Reportar </button>
                            <button type="reset" class="btn btn-primary" id="btnReset"> Limpiar</button>
                            <br>
                            <div id="msjReportProblem"></div>
                        </div>
                    </form>     
                   
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END REPORTAR PROBLEMA -->

 <!--BEGIN MODAL-->
 <input id="mostrar-modal" name="modal" type="radio" /> 
 <input id="cerrar-modal" name="modal" type="radio" />
 

<div id="modal">
<label for="cerrar-modal" id="cerrar-modal-label"> X </label> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="page-header">Lista de problemas para equipos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="ventana">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de problemas para un equipo:
                    <div class=" input-group" class="float-right">
                        <input type="text" class="form-control" placeholder="Buscar problema" id="searchProblem">
                        <span class="input-group-btn">
                            <button class="btn btn-warning" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div id="frameProblems">
                                <table class="table table-striped table-advance table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Descripcion</th>
                                            <th>Tipo de problem</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableProblems">
                                    </tbody>

                                </table>
                            </div>
                            
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ url('admin/addproblem')}}" class="btn btn-primary">Adicionar nuevo problema</a>
                
                            <button type="submit" class="btn btn-success" id="returnToMenu" > Volver  al  menu  Principal </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div>
<!--END MODAL-->



@endsection

@section('scripts')
    <script src="{{ asset('/sysitic/js/reportProblem.js') }}"></script>
@endsection